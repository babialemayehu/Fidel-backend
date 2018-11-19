<?php

namespace App\Http\Controllers\NotiManagment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\ViewComposers\NavbarComposer;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\notificationController;
use App\Notification; 

class NotiController extends Controller
{
    public function unseenCount(){
        return Auth::user()->user_notification()->where('seen', 0)->get()->count(); 
    }

    
}
