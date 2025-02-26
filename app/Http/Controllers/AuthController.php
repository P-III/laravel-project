<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showSignup (){
        return view('Signup');
    }
    public function Signup(Request $request){
        $request->validate([
        'username' => 'required|string',
        'password'=>'required|min:4',
    ]);
    try{
    Users::create([
        'UserName'=>$request->username,
        'Password'=>$request->password,
    ]);
    return redirect()->route('Login');
}catch(\Exeption $e){
   return back()->with('error','Error'.$e);
}
    }

    public function showLogin(){
        return view('Login');
    }
    
    public function Login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required|min:4',
        ]);
        try{
        $user= Users::where('UserName',$request->username)->first();
        if($user && $request->password === $user->Password){
            Session::put('user',$request->username);
            return redirect()->route('Dashboard');
        }
    }catch(\Exeption $e){
        return back()-> with('error','Invalid credential'.$e);
    }}

    public function Dashboard(){
        if(!Session::has('user')){
            return redirect()->route('Login');
        }else{
            return view('Dashboard',['username'=> Session::get('user')]);
        }
    }

    public function Logout(){
        Session::forget('user');
        return redirect('/Login');
    }
}
