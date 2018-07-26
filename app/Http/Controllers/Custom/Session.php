<?php

namespace App\Http\Controllers\Custom;
use Illuminate\Support\Facades\Auth;
use App\Course_session; 

class Session{
    function get_student_current_sessions(int $id = -1){
        if($id == 1)$id = Auth::id(); 
        
    }
}
