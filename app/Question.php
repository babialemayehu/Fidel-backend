<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = ['session_id','question','answer','student_id','is_answerd','seen'];
    public function student(){
        return $this->belongsTo('App\User', 'student_id'); 
    }
}
