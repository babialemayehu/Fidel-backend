<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_group extends Model
{
    protected $fillable = ['user_id','group_id'];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function group(){
        return $this->belongsTo('App\Group');
    }
}
