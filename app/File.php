<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['name','type','catagory','size','location','user_id','course_session_id' ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function session(){
        return $this->belongsTo('App\Course_session_id');
    }
}
