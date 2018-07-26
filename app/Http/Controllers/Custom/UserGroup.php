<?php

namespace App\Http\Controllers\Custom;
use Illuminate\Support\Facades\Auth;
use App\User_group; 
use App\Group; 
use App\User; 

class UserGroup{
    public const ALL = 0; 
    public const WITH_CLASS = 1; 
    public const OTHER = 2;

    function get_student_current_groups(int $id = -1, int $flag = 0){
        if($id == -1)$id = Auth::id(); 
        switch($flag){
            case UserGroup::WITH_CLASS:  
                return User::find($id)->groups()->where('catagory', 'class')->get(); 
            break;
            case UserGroup::OTHER:
                return User::find($id)->groups()->where('catagory', 'other')->get(); 
            break; 
            default: 
                return User::find($id)->groups()->get(); 
        } 
    }
}
