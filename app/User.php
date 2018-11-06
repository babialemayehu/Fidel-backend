<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'regId',
        'email',
        'phone',
        'password',
        'firstName',
        'middleName',
        'lastName',
        'birthDate',
        'nationality',
        'gender',
        'college_id',
        'department_id',
        'setup_state'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function group(){
        return $this->hasMany('App\Group');
    }
    public function user_group(){
        return $this->hasMany('App\User_group');
    }
    public function teacher(){
        return $this->hasOne('App\Teacher');
    }
    public function department(){
        return $this->belongsTo('App\Department');
    }
    public function collage(){
        return $this->belongsTo('App\Collage','college_id');
    }
    // public function role(){
    //     return $this->hasMany('App\Role');
    // }
    public function user_role(){
        return $this->hasMany('App\User_role');
    }
    public function inc_exc(){
        return $this->hasMany('App\Inc_exc');
    }
    public function groups(){
        return $this->belongsToMany('App\Group', 'User_groups'); 
    }
    public function sessions(){
        return $this->hasMany('App\Course_session','teacher_id'); 
    }
}
