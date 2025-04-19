<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\user;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showregister(){
        return view('Auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'name'=>'required|min:5',
            'email'=>'required|email',
            'password'=>'required|confirmed|min:5', 
        ]);
         $roleData=user::count();

        $user =new user;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=hash::make($request->input('password'));
        $user->role=$roleData ===0  ?'admin' :'user';
        $user->save();

        return redirect('/')->with('success','berhasil register');
      }
      public function showlogin(){
        return view('Auth.login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/')->with('success','berhasil login');
            
        }
        return back()->withErrors([
            'email' => 'invalid user',
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/')->with('error','berhasil logout');
    }

}
