<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Sms extends Model
{
    public $fillable = [ 
                            'message',
                            'reciver_id',
                            'sender_id',
                            'sent'
                        ];

    public function reciver(){
        return $this->belongsTo("\App\User", "reciver_id"); 
    }

    public function sender(){
        return $this->belongsTo('\App\User', 'sender_id'); 
    }
}

