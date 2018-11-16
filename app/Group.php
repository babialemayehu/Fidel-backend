<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['user_id','name','catagory'];
    public function user_group(){
        return $this->hasMany('App\User_group');
    }
    public function _class(){
        return $this->hasOne('App\_Class');
    }
    public function cource_session(){
        return $this->hasMany('App\Course_session');
    }
    public function users(){
        return $this->belongsToMany('App\User', 'user_groups'); 
    }
    public function sessions(){
        return $this->hasMany('App\Sission'); 
    }
}
