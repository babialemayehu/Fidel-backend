<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Jobs\SendSms; 
use App\Course_session; 
use App\User;
use App\Sms;
use Carbon\Carbon; 

class SendSessionSms implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $session_id; 
    public $message; 
    public $sender; 

    public function __construct($session_id, $message, $sender)
    {
        $this->session_id = $session_id; 
        $this->message = $message; 
        $this->sender = $sender; 
    }

    public function handle()
    {
        $users = Course_session::find($this->session_id)->first()->group()->first()->users()->get(); 
       
        foreach($users as $user){
           // SendSms::send((string)$user->phone, (string)$message); 
            SendSms::dispatch( $user->phone, $this->message,  $this->sender)
            ->delay(Carbon::now()->addSecond(1));; 
        }
    }
}
