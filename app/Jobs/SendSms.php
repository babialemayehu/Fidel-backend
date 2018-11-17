<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Auth;
use App\Course_session; 
use App\User;
use App\Sms;

class SendSms implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $phone; 
    public $message; 
    
    public function __construct($phone, $message)
    {
        $this->phone = $phone; 
        $this->message = $message; 
    }

    public static function send($phone, $message){
        $responce = shell_exec("python3 ../python/smss.py +251$phone \"$message\""); 
        $sms = new Sms; 
        $sms->message = $message; 
        $sms->reciver_id = User::where('phone', $phone)->first()->id; 
        $sms->sender_id = Auth::id(); 
        $sms->sent = (json_encode(json_decode($responce)) == true); 
        $sms->save(); 
        return $sms->sent; 
    }

    public function handle()
    {
        //SendSms::send($this->phone, $this->message); 
        $responce = shell_exec("python3 ../python/smss.py +251$this->phone \"$this->message\""); 
        $sms = new Sms; 
        $sms->message = $this->message; 
        $sms->reciver_id = User::where('phone', $this->phone)->first()->id; 
        $sms->sender_id = Auth::id(); 
        $sms->sent = (json_encode(json_decode($responce)) == true); 
        $sms->save(); 
        return $sms->sent; 
    }
}
