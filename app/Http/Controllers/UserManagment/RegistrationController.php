<?php

namespace App\Http\Controllers\UserManagment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\Password; 
use App\User;
use App\User_role; 
use App\Teacher; 
class RegistrationController extends Controller
{
    private function _auth(){
        return Auth::user(); 
    }
    public function password($email){
        $password = strtolower(Str::random(6)); 
        Mail::to($email)->send(new Password($password)); 
        return bcrypt($password); 
    }

    public function teacher($user_id){
        Teacher::create([
            'user_id' => $user_id, 
            'accadamic_status' => 'instracor', 
            'expriance' => 3, 
            'rateing' => 4
        ]);
    }

    public function role($user_id, $role_id){
        User_role::create([
            'user_id' => $user_id, 
            'role_id' => $role_id
        ]);
    }

    public function register(Request $request){
      //  return $request->all(); 
    //  return $request->role; 
        $this->validate($request, [
            'regId' => 'required|string|max:14|unique:users', 
            'firstName' => 'required|string|max:30', 
            'middleName' => 'required|string|max:30', 
            'lastName' => 'required|string|max:30', 
            'birthDate' => 'date',
           // 'nationality' => 'required|numeric|max:30', 
            'gender' => 'required|string',
            'role' => 'required|numeric'
        ]); 

        $user = User::create([
            'regId' => strtoupper($request->regId), 
            'firstName' => ucfirst($request->firstName), 
            'middleName' => ucfirst($request->middleName), 
            'lastName' => ucfirst($request->lastName), 
            'birthDate' => $request->birthDate, 
            'nationality' => $request->nationality, 
            'gender' => $request->gender,
            'phone' => $request->phone, 
            'email' => strtolower($request->email), 
            'password' => $this->password($request->email),
            'college_id' => 1,
            'department_id' => 1
        ]); 

        $this->role($user->id, $request->role); 
        
        if($request->role == 2) $this->teacher($user->id); 
        return $user; 
    }

    public function reset(\App\User $user){
        if($user != null){
            $user->update([
                'password' => $this->password($user->email), 
                'setup_state' => 0
            ]); 
            return 'true'; 
        }else
            return 'false'; 
    }
}
