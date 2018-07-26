<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\groupController;
use App\User;
use App\Group;
use App\Course;
use App\Course_session;
use App\Teacher;
use App\User_group;
use App\_Class;
use App\Inc_exc;

class sessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function groups(){
       $group = Auth::user()->group()->where('catagory','class')->get();
       return ($group->count() > 0)?$group:false; 
    }
    public function session_index(){
        $groups = $this->groups();
        $responce_data = [];
        $i = 0;
        if($groups !== false)
            foreach($groups as $group){
                $sessions = $group->cource_session()->get();
                    foreach($sessions as $session){ 
                        $arr['groupName'] = $session->group()->first()->name;
                        $arr['courseName'] = $session->course()->first()->name;
                        $arr['instractor'] = $session->user()->first()->firstName.' '.$session->user()->first()->middleName;
                        $arr['acadamicYear'] = $session->accadamic_year;
                        $arr['semister'] = $session->semister;
                        $arr['id'] = $session->id;
                        $responce_data[$i++] = (object)$arr;
                    }
            }

        return $responce_data;
    }
    public function getSessions(){
        $g = new groupController;
        return $g->userGroups();
    }
    public function index()
    {   
        $groupNames = [];
        $groups = $this->groups();
         if($groups !== false){
             foreach($groups as $group)
                 $groupNames[$group->id] = $group->name .' '. 'A';
         }
         return view('pages.manege.session')->with('groupNames', $groupNames)
                                            ->with('isgroupNamesEmpty',empty($groupNames));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function inc_exc_students($inc,$exc,$session){
        foreach($inc as $i)
            Inc_exc::create([
                'user_id' => User::where('regId',$i)->first()->id,
                'session_id' => $session->id,
                'included' => true
            ]);
        foreach($exc as $e)
            Inc_exc::create([
                'user_id' => User::where('regId',$e)->first()->id,
                'session_id' => $session->id,
                'included' => false
            ]);

    }
    public function createSession($cource,$group,$teacher,$year,$start, $end){
        $m = date('m');
        $semister = ($m>=9)?'I':'II';
       return Course_session::create([
                'course_id' => $cource->id,
                'group_id'  => $group->id,
                'teacher_id'=> $teacher->id,
                'accadamic_year'=>$year,
                'semister'=>$semister,
                'start_date' => $start,
                'end_date' => $end
            ]);
    }
    public function store(Request $request)
    {   
        $group = Group::find($request->input('group'));
        $course =  Course::where('code',$request->input('cource_code'))->first();
        $teacher = User::where('regId',$request->input('teacher'))->first();
        $inc = json_decode($request->input('inc'));
        $exc = json_decode($request->input('exc'));

        $session = $this->createSession($course,$group,$teacher,$request->input('accadamic_year'),$request->input('start'),$request->input('end'));
        $this->inc_exc_students($inc,$exc,$session);
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course_session::findOrFail($id)->delete();
        return 'deleted';
    }
}
