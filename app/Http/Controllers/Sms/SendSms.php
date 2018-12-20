<?php
namespace App\Http\Controllers\Sms; 
use App\Course_session; 
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Sms; 

class SendSms{
    public static function send($phone, $message){
        $responce = shell_exec("python3 ./python/smss.py +251$phone \"$message\""); 
        $sms = new Sms; 
        $sms->message = $message; 
        $sms->reciver_id = User::where('phone', $phone)->first()->id; 
        $sms->sender_id = Auth::id(); 
        $sms->sent = (json_encode(json_decode($responce)) == true); 
        $sms->save(); 
       // return $sms->sent; 
       return shell_exec("ls"); 
    }

    public static function sendToSession($session_id, $message){
        $users = Course_session::find($session_id)->first()->group()->first()->users()->get(); 
       
        foreach($users as $user){
           // SendSms::send((string)$user->phone, (string)$message); 
            SendSms::send( $user->phone, $message); 
            sleep(10); 
        }
    }
}