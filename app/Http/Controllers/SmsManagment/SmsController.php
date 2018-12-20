<?php

namespace App\Http\Controllers\SmsManagment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User; 
use App\Jobs\SendSms; 
use Illuminate\Support\Facades\Auth;

class SmsController extends Controller
{
    public function forAll(Request $request){
        $users = User::get(); 
        foreach($users as $user){
            SendSms::dispatch($user->phone, $request->message, Auth::id())->delay(Carbon::now()->addSecond(1)); 
        }
        return 'true'; 
    }
}
