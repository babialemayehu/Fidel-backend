<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    public function user(){
        return $this->belongsToMany('App\User', 'user_roles');
    }
}
