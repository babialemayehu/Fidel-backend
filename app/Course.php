<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable =[
        'name','code','credit_hr','ECTS','weeks','delivery','objective' ,'discription'
    ];
    public function chapter(){
        return $this->hasMany('App\Chapter','cource_id');
    }
}
