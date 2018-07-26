<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mark_structure;
use App\Mark;
use App\Course_session;

class markStructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $mark_col = $Mark_struacture = Mark_structure::create([
            'course_session_id' => $request->session_id,
            'out_of' =>$request->col
        ]);
        $students = Course_session::find($request->session_id)->group()->first()->user_group()->get();
        foreach($students as $student){
            $mark = new Mark;
            $mark->mark_structure_id = $Mark_struacture->id;
            $mark->user_id = $student->user()->first()->id;
            $mark->save();
        }
        return $mark_col->id;
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
        //
    }
}
