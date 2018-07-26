<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class _Class extends Model
{
    protected $fillable = ['department_id','teacher_id','group_id','section'];
    public function department(){
        return $this->belongsTo('App\Department');
    }
    public function teacher(){
        return $this->belongsTo('App\Teacher');
    }
    public function group(){
        return $this->belongsTo('App\Group');
    }
}
