<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;
class Notification extends Model
{
    protected $fillable = ['user_id', 'type','title','content','target','session_id'];

    public function user_notification(){
        return $this->hasMany('App\User_notification'); 
    }

    public function session(){
        return $this->belongsTo('App\Course_session', 'session_id'); 
    }
}
