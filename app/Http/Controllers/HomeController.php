<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\ProfileMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(Request $request)
    {
      return view('welcome');
    }
}