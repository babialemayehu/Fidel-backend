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
use App\Mail\Password; 
use Illuminate\Support\Facades\Mail;

class SendSms implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $phone; 
    public $message; 
    public $sender; 

    public function __construct($phone, $message, $sender)
    {
        $this->phone = $phone; 
        $this->message = $message; 
        $this->sender = $sender;
    }

    public function handle()
    {
        //SendSms::send($this->phone, $this->message); 
        //$responce = shell_exec("python3 ../python/smss.py +251$this->phone \"$this->message\""); 
         $responce = true; 
        // Mail::to('eba@gail.com')->send(new Password("LDFk")); 
        $sms = Sms::create([
            'message' => $this->message,
            'reciver_id' => User::where('phone', $this->phone)->first()->id ,
            'sender_id' => $this->sender,
            'sent' => (json_decode(json_encode($responce)) == true)
        ]); 
        return $sms->sent; 
    }
}
