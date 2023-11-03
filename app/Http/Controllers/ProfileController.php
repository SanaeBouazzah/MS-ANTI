<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
  public function index()
  {
    // $profiles = Profile::Paginate(14);
    $profiles = Profile::orderBy('created_at', 'desc')->paginate(14);
    return view('profiles.index', compact('profiles'));
  }
  public function show(Profile $profile)
  {
    return view('profiles.show', compact('profile'));
  }
  public function create()
  {
    return view('profiles.create');
  }
  public function store(Request $request)
  {
    $name =  $request->name;
    $data = $request->validate([
      'name' =>  'required',
      'email' => 'required | email | unique:profiles',
      'password' => 'required |confirmed',
      'bio' => 'required',
    ]);
    $data['password'] = Hash::make($request->password);
    Profile::create($data);

    return redirect()->route('profiles.index')->with('message', 'You are logged in Successfully ' . $name . '!!!');
  }
}
