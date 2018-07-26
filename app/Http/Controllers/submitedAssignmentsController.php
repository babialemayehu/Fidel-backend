<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Custom\Helper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Submited_assignment;
use App\User;
use App\Assignment; 

class submitedAssignmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    public function store(Request $request)
    {
        $file = Helper::saveFile($request->file,$request->session_id);     
        // $submit = new Submited_assignment;
        // if(!$submit->where("student_id", Auth::id())->where("assignment_id",$request->assignment)){
        //       $submit = Submited_assignment::where("student_id", Auth::id())->where("assignment_id",$request->assignment);            
        // }else{
        //     $submit->student_id= Auth::id();
        //     $submit->assignment_id= $request->assignment;           
        // }
        // $submit->file_id= $file->id;
        // $submit->note= $request->note;
        // $submit->save();
        // $check = [
        //     "assignment_id"=>$request->assignment,
        //     "student_id"=> Auth::id(), 
        // ]; 
        // $submit = Submited_assignment::firstOrNew($check);
        // $submit->file_id= $file->id;
        // $submit->note= $request->note;
        // $submit->save();
        $check = [
            "assignment_id"=>$request->assignment,
            "student_id"=> Auth::id(), 
        ]; 
        $update = [
            "file_id"=> $file->id,
            "note"=> $request->note
        ];
        Submited_assignment::updateOrCreate($check, $update); 
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
        $submits = Submited_assignment::where('assignment_id',$id)->get();
        $assignment = Assignment::find($id);
        $markStructureId = $assignment->mark_structure_id; 

        foreach($submits as $submited){
            $file = $submited->file()->first();
            $user = User::find( (int)$submited->student_id);
            $submited->url = Storage::url($file->location);
            $submited->regId = $user->regId;
            $submited->user = $user->firstName .' ' .  $user->lastName;
            $submited->markStructureId = $markStructureId; 
            $submited->mark = (marksController::getStudentMark($submited->student_id, $markStructureId));
            $submited->isLive = (Carbon::now()->diffInMinutes(Carbon::parse($assignment->due), false) >= 0);
        } 
        return view('pages.course.teacher.submitedAssignmentsList')->with('submits',$submits);
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
        //
    }
}
