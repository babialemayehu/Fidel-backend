<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Custom\Helper;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Mark;
use App\Mark_structure;
use App\Course_session;

class marksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Opps!!';
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
        $data = json_decode($request->change);
        $mark = Mark::where('mark_structure_id', $data[1])
                        ->where('user_id',Helper::userByRegId($data[0])->id)->first();       
        $mark->value = (double)$request->value;
        $mark->save();
        return 'stor';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function getStudentMark($student_id, $markStructure_id){
        return Mark::where("mark_structure_id", $markStructure_id)->where('user_id', $student_id)->first()->value; 
    }
    public function show($id)
    {
        $mark_header_ids = [];
        $students_regId = [];
        $mark_headers = [];
        $mark_values = [];
        $studentMarks =[]; 

        $markValues = Mark_structure::where('course_session_id',$id)->get();  
        $students = Course_session::find($id)->group()->first()->user_group()->get();
        foreach($students as $student){
            array_push($students_regId, $student->user()->first()->regId);
            $records = [];
            foreach($markValues as $mv){
                array_push($records,$mv->mark()->where('user_id',$student->user()->first()->id)->first()->value);
            }
            if($student->user()->first()->id  == Auth::id()){
                $studentMarks = $records;
            }
            array_push($mark_values, $records);
        }
        foreach($markValues as $mv){
            array_push($mark_headers ,$mv->out_of.'%');
        }
        foreach($markValues as $mv){
            array_push($mark_header_ids ,$mv->id);
        }
        return view('pages.course.mark')->with('markCol',json_encode($mark_headers))
                                        ->with('mark_header', $mark_headers)
                                        ->with('markColIds', json_encode($mark_header_ids))
                                        ->with('students', json_encode($students_regId))
                                        ->with('values', json_encode($mark_values))
                                        ->with('studentMarks', $studentMarks);
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
