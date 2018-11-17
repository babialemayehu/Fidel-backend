<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Custom\Helper;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\File;
use App\Course_session;
use App\Course; 
use App\Http\Controllers\notificationController; 

class shelfsController extends Controller
{
   
    public function index()
    {
        return view('pages.course.shelf');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Helper::saveFile($request->file,$request->session);
        $course = Course::find(Course_session::find($request->session)->course_id); 

        notificationController::notify(
            'file', 
            'New file was uploaded to the shelf',
            'New file is uploaded by '.$course->name.' course', 
            $request->session
        );
        return $request->session;
    }

    public static function formatBytes($size, $precision = 2)
    {
        if ($size > 0) {
            $size = (int) $size;
            $base = log($size) / log(1024);
            $suffixes = array(' bytes', ' KB', ' MB', ' GB', ' TB');

            return round(pow(1024, $base - floor($base)), $precision) . $suffixes[floor($base)];
        } else {
            return $size;
        }
    }
    public function show($id)
    {
       $files = File::where("course_session_id",$id)->orderBy('created_at','desc')->get();
       foreach($files as $file){
           $file->location = Storage::url($file->location);
           $file->size = $this->formatBytes($file->size); 
       }
       return $files;
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
