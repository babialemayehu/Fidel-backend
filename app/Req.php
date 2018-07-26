<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Req extends Model
{
    protected $fillable = ['session_id','request','responce','min_vote']; 
    public function session(){
        return $this->belongsTo("App\Course_session","session_id"); 
    }
    public function vote(){
        return $this->hasOne("App\Vote","request_id"); 
    }
}
