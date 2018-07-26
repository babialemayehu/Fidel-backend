<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['user_id','collage_id','name'];
    public function _class(){
        return $this->hasMany('App\_Class');
    }
}
