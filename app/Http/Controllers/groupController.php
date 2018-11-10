<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\userGroupController;
use App\Http\Controllers\Custom\Helper;
use App\Group;
use App\User;
use App\User_group;
use App\_Class;
use App\Department;

class groupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userGroups(){
         $group = Auth::user()->group();
         $g = $group->get();
         $i = 0;
         $count = [];
         $section = [];
         $teacher = [];
         $userGroup = new userGroupController;
         foreach($g as $group){
             $count[$i] = $userGroup->membersCount($group->id);
             if($group->catagory == 'class'){
                $class = $group->_class()->first();
                $section[$i]= $class->section;
                $t=  $class->teacher()->first()->user()->first();
                $teacher[$i][0] = $t->firstName .' '.$t->middleName;
                $teacher[$i][1] = $t->regId;
             }
             else{
                $section[$i]=false;
                $teacher[$i]=false;
             }
            $i++; 
         }
         $data[0] = $group->orderBy('id','desc')->paginate(20);
         $data[1] = array_reverse($count);
         $data[2] = array_reverse($section);
         $data[3] = array_reverse($teacher);
         return $data;
    }
    public function index()
    {
        return view('pages.manege.group');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createGroup($name,$catagory){
        return Group::create([
                    'user_id' => Auth::id(),
                    'name' => $name,
                    'catagory' => $catagory
                ]);
    }
    public function add_members($group_id,$members){
        $members = json_decode($members);
        foreach($members as $member){
            $student = User::where('regId',$member); 
            if(!empty($member) && $student != null){
                $user_id =(int)$student->id;
                User_group::create([
                    'user_id' => $user_id,
                    'group_id' => $group_id
                ]);
            }
        }
    }
    public function createClass($adviserId,$section,$groupId){
            return _Class::create([
                'department_id' => Auth::user()->department_id,
                'teacher_id' => $adviserId,
                'group_id' => $groupId,
                'section' => $section
            ]);
    }
    public function store(Request $request)
    {   
        $id = $this->createGroup($request->input('name'),$request->input('catagory'))->id;
        $this->add_members($id,$request->input('members'));
        if($request->input('catagory') == 'class'){
            $teacherId = Helper::teacherId($request->input('adviser'));
            $this->createClass($teacherId,$request->input('section'),$id);
        }
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
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'edit' . $id;
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
        $group = Group::findOrFail($id);
        if($group->catagory == 'class')
            $_class = _Class::where('group_id', $id)->first();
        else if($group->catagory == 'other' && $request->input('catagory') == 'class')
            $_class = new _Class;

        if($group->catagory == 'class' && $request->input('catagory') == 'other')
            $_class->delete();

        $group->name = $request->input('name');
        $group->catagory = $request->input('catagory');

        if($request->input('catagory') == 'class'){
            $_class->section = $request->input('section');
            $_class->department_id = Auth::user()->department_id;
            $_class->group_id = $id;
            $_class->teacher_id = Helper::teacherId($request->input('adviser'));
            $_class->save();
        }
        $group->save();
        return 'updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    
        User_group::where('group_id',$id)->delete();
        Group::findOrFail($id)->delete();
        return 'deleted';
    }
}
