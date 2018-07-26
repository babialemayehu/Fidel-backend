<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submited_assignment extends Model
{
    protected $fillable = ['student_id','file_id','assignment_id','note'];

    public function file(){
        return $this->belongsTo('App\File');
    }
    public function student(){
        return $this->belongsTo('APP\User','sutdent_id');
    }
}
