<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
      $users = User::all();
      $counting = $request->session()->get('compteur', 0);
      $request->session()->put('compteur', $counting+1);
      $compteur = $request->session()->get('compteur');
      // dd($compteur);
      return view('welcome', compact('users', 'compteur'));
    }
}