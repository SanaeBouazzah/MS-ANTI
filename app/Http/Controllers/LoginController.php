<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
      return view('login.index');
    }
    public function store(Request $request){
      $email = $request->email;
      $password = $request->password;
      $values = ['email' => $email, 'password' => $password] ;
      if(Auth::attempt($values)){
        $request->session()->regenerate();
        return redirect()->route('home')->with('message','You are logged in Successfully!!!');
      }else{
        return back()->withErrors([
          'email' => 'Email Or Password is incorrect'
        ])->onlyInput('email');
      }
    }
}
