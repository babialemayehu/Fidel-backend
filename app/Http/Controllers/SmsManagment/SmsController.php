<?php

namespace App\Http\Controllers\SmsManagment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User; 
use App\Jobs\SendSms; 

class SmsController extends Controller
{
    public function forAll(Request $request){
        $users = User::get(); 
        foreach($users as $user){
            SendSms::dispatch($user->phone, $request->message); 
        }
        return 'true'; 
    }
}
