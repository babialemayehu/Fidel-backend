<?php

namespace App\Http\Controllers\NotiManagment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\ViewComposers\NavbarComposer;
use App\Notification; 

class NotiController extends Controller
{
    public function unseenCount(){
        $sessions = new NavbarComposer(); 
        $sessions = $sessions->user_sessions();
        $sessionIds = []; 
        foreach($sessions as $session){
            array_push($sessionIds, $session->id); 
        }
        return Notification::whereIn('session_id', $sessionIds)->where("seen" , 0)->get()->count();
    }
}
