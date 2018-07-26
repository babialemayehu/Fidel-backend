<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Custom\Helper;
use App\User;
use App\Assignment;
use App\File;
use Carbon\Carbon;
class assignmentController extends Controller
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
        $markstructure = new markStructureController(); 
        $request->col = $request->input('value');
        $request->session_id = $request->input('session_id'); 

        $markstructure_id = $markstructure->store($request); 

        $file = Helper::saveFile($request->file,$request->session_id);
        Assignment::create([
            'course_session_id' => $request->input('session_id'),
            'value' => $request->input('value'),
            'due' => $request->input('due'),
            'file_id' => $file->id,
            'evaluation' => $request->input('evaluation'),
            'instraction' => $request->input('instraction'), 
            'mark_structure_id' => $markstructure_id
        ]);
        return $request->file('file');
    }
    public function show($id)
    {
        $assignments = Assignment::where('course_session_id',$id)->orderBy('id','desc')->get();

        foreach($assignments as $assignment){
            $assignment->live = (Carbon::now()->diffInMinutes(Carbon::parse($assignment->due), false) >= 0);
            $assignment->dueHuman = Carbon::parse($assignment->due)->diffForHumans();
            $assignment->file = [
                                    Storage::url($assignment->file()->first()->location),
                                    $assignment->file()->first()->name,
                                    round($assignment->file()->first()->size/ 
                                    (($assignment->file()->first()->size>1000000000)? 1000000000:1000000) 
                                    ,2).(($assignment->file()->first()->size>1000000000)?' MB':' KB')
                                ];
        }
        return view('pages.course.assignment')->with('assignments',$assignments)
                                                ->with('session_id',$id)
                                                ->with('count',$assignments->count())
                                                ->with('c',$assignments->count())
                                                ->with('count2',$assignments->count());
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
