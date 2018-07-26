<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark_structure extends Model
{
    protected $fillable = ['course_session_id','out_of'];
    public function mark(){
        return $this->hasMany('App\Mark');
    }
}
