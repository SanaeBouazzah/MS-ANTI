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
        return redirect()->route('home');
      }else{
        return back()->with('message', 'Something is Wrong Check your email is correct!!!!!');
      }
    }
}
