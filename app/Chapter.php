<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = ['user_id','name','weeks'];
    public function sub_chapter(){
        return $this->hasMany('App\Sub_chapter');
    }
}
