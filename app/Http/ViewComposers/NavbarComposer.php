<?php 
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Custom\Helper;
use APP\Course_session;

class NavbarComposer{
    public function compose(View $view){
        $view->with('current_sessions',$this->user_sessions_with_course_name())
             ->with('role',$this->user_role());
    }
    private $roleTypes = ['student','teacher','department head','teacher&department_head'];
    public function user_session_role(){
        $user_roles = Helper::userRoles(Auth::id())->get();
        $roles = []; 
        foreach($user_roles as $user_role)
            array_push($roles, $user_role->role_id); 
        return (count($roles) > 0)?$roles:false;
    }
    public function user_excluded_sessions(){
        $excluded_from = [];
        $inc_excs = Auth::user()->inc_exc()->get();
        foreach($inc_excs as $inc_exc){
            if(!$inc_exc->included)
                array_push($excluded_from,$inc_exc->session_id);
        }
        return $excluded_from;
    }
    public function user_sessions(){
        $unfiltered_sessions = [];
        $filtered_sessions = [];
        $exculudeds = $this->user_excluded_sessions();
        
        $user_session_role = $this->user_session_role(); 

        if($user_session_role !== false){
            foreach($user_session_role as $role){
                switch($role){
                    case 1:
                        $user_groups = Auth::user()->user_group()->get();
                        $user_includes = Auth::user()->inc_exc()->where('included',1)->get();
                        foreach($user_groups as $user_group)
                            array_push($unfiltered_sessions,$user_group->group()->first()->cource_session()
                                                            ->whereDate('start_date',"<=",'20'.date('y-m-d'))
                                                            ->whereDate('end_date', '>=', '20'.date('y-m-d'))->get());
                        foreach($user_includes as $user_include)
                            array_push($unfiltered_sessions, $user_include->session()
                                                            ->whereDate('start_date',"<=",'20'.date('y-m-d'))
                                                            ->whereDate('end_date', '>=', '20'.date('y-m-d'))->get());
                        if(isset($unfiltered_sessions[0]))
                            foreach($unfiltered_sessions[0] as $session)
                                if(!in_array($session->id,$exculudeds))
                                    array_push($filtered_sessions,$session);
                        if(isset($unfiltered_sessions[1]))
                            foreach($unfiltered_sessions[1] as $session)
                                array_push($filtered_sessions,$session);
                        break; 
                    case 2:
                        $filtered_sessions = Auth::user()->sessions()->whereDate('start_date',"<=",'20'.date('y-m-d'))
                                                                    ->whereDate('end_date',">=",'20'.date('y-m-d'))
                                                                    ->get(); 
                        break; 
                }
            }
        }

        return $filtered_sessions;
    }
    public function user_sessions_with_course_name(){
        $sessions = $this->user_sessions();
        foreach($sessions as $session){
            $session->course_name = $session->course()->first()->name;
        }
        return $sessions;
    }
    public function user_role(){
        $roleView = "";
        $session_roles = $this->user_session_role();
        if($session_roles)
            foreach($session_roles as $role){
                $roleView .= $role; 
            }
                 
        return $roleView;
    }
}