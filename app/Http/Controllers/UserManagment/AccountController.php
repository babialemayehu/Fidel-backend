<?php

namespace App\Http\Controllers\UserManagment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User; 
use App\Role; 

class AccountController extends Controller
{
    public function changePassword($option  = "", Request $request){
        $auth = Auth::user(); 

        if($request->password == $request->confirm){
            $auth->password = bcrypt($request->password); 
            if($option == 'first time'){
                $auth->setup_state = -1; 
            }
            $auth->save();
            return $auth;  
        }else{
            return response(json_encode((object)['message'=>"Confirmation dosn't match"]), 406 );
        } 
    }

    public function getByRole($role){
        $auth = Auth::user(); 

        $students = Role::find($role)->user(); 
        $students = $students->where('department_id', $auth->department_id);

        return $students->get(); 
    }

    public function update( \App\User $user, Request $request){
        $user = $user->update($request->all()); 
        return $user->first(); 
    }

    public function delete(\App\User $user, Request $request){
        $user->delete(); 
        return $user; 
    }

    public function idExist($regId){
        return (User::where('regId', $regId)->get()->count() > 0)? 'true': 'false'; 
    }

    public function phoneExist($phone){
        return (User::where('phone', $phone)->get()->count() > 0)? 'true': 'false'; 
    }
    
    public function emailExist($email){
        return (User::where('email', $email)->get()->count() > 0)? 'true': 'false'; 
    }
}
