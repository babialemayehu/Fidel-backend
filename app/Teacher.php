<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['user_id','accadamic_status','expriance','rateing'];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
