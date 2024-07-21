<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingfields=$request->validate([
            'name'=>['required', 'min:3','max:20',Rule::unique('users','name')],
        'email'=>['required','email',Rule::unique('users','email')],
        'password'=>['required','min:8','max:16']
        ]);
        $incomingfields['password']=bcrypt($incomingfields['password']);
        $user=User::create($incomingfields);
        // auth()->login($user);
        return  redirect('/login');
    }
    public function logout(){
        auth()->logout();
        return redirect('/');
    }
    public function login(Request $request){
        $incomingfields=$request->validate([
            'loginname'=>'required',
            'loginpassword'=>'required'
        ]);
        if(auth()->attempt(['name'=>$incomingfields['loginname'],'password'=>$incomingfields['loginpassword']])){
                $request->session()->regenerate();
        }
        return redirect('/userindex');
    }   

}
