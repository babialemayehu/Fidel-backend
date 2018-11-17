<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login_log extends Model
{
    protected $fillable = ["ip", "user_id"]; 

    public function user(){
        return $this->belongsTo("App\User"); 
    }
}
