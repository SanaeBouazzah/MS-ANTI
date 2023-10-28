<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function index()
  {
    $profiles = Profile::Paginate(14);
    return view('profiles.index', compact('profiles'));
  }
  public function show(Request $request)
  {
    $profile = Profile::findOrFail($request->id);
    return view('profiles.show', compact('profile'));
  }
  public function create()
  {
    return view('profiles.create');
  }
  public function store(Request $request)
  {
    $name =  $request->name;
    Profile::create([
      'name' =>  $request->name,
      'email' => $request->email,
      'password' => $request->password,
      'bio' => $request->bio,
    ]);

    return redirect()->route('profiles.index')->with('message', 'You are logged in successfully ' . $name . '!!!');
  }
}
