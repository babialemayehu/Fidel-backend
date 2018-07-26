<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = [ 'course_session_id','mark_structure_id','file_id','value','due','evaluation','instraction'];
    public function file(){
        return $this->belongsTo('App\File'); 
    }
}
