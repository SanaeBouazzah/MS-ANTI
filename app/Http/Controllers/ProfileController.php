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

    Profile::create($request->post());

    return redirect()->route('profiles.index');
  }
}
