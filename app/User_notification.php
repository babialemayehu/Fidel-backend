<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_notification extends Model
{
    protected $fillable = ['user_id','notification_id','seen'];
   
    public function notification(){
        return $this->belongsTo("App\Notification"); 
    }
}
