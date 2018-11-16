<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course_session;
use App\User;
use App\Chapter;
class sessionCousesController extends Controller
{
    public function instracter_profile($session){
        $profile = User::find($session->teacher_id);
        $profile->gender = ($profile->gender == 'M')?"Male":"Female";
        $profile->department = $profile->department()->first()->name;
        $profile->college = $profile->collage()->first()->name;
        $profile->expreience = $profile->teacher()->first()->expriance; 
        $profile->accadamic_status = $profile->teacher()->first()->accadamic_status;
        return $profile;
    }
    public function chapters($session){
        $chapters = $session->course()->first()->chapter()->get();
        $subs = [];
        foreach($chapters as $chapter)
            array_push($subs, $chapter->sub_chapter()->get());
        return [$chapters, $subs];
    }
    public function getCourses($id){
        $session = Course_session::findOrFail($id);
        return view('pages.courses')
                ->with('instracter_profile',$this->instracter_profile($session))
                ->with('course_title',$session->course()->first()->name)
                ->with('chapters', json_encode($this->chapters($session)))
                ->with('course',$session->course()->get())
                ->with('courseId', $id);
    }
}
