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
        $auth = User::find(7); 

        $students = Role::find($role)->first()->user(); 
        $students = $students->where('department_id', $auth->department_id);

        return $students->get(); 
    }
}
