<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_session extends Model
{
    protected $fillable = ['course_id', 'group_id', 'teacher_id','accadamic_year','semister','start_date','end_date'];

    public function group(){
        return $this->belongsTo('App\Group');
    }
    public function user(){
        return $this->belongsTo('App\User','teacher_id');
    }
    public function course(){
        return $this->belongsTo('App\Course');
    }
}

