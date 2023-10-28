<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
      $users = [['id' => '1', 'name' => 'Alice', 'job' => 'Developer'], 
               ['id' => '2', 'name' => 'Alice', 'job' => 'Developer'],
               ['id' => '3', 'name' => 'Alice', 'job' => 'Developer']]; 
      return view('welcome', compact('users'));
    }
}