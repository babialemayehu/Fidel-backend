<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inc_exc extends Model
{
    protected $fillable = ['user_id','session_id','included'];
    public function session(){
        return $this->belongsTo('App\Course_session');
    }
}
