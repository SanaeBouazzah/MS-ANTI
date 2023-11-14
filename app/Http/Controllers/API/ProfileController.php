<?php

namespace App\Http\Controllers\API;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()  
    {
        return Profile::paginate(2);
    }
    public function store(Request $request)
    {
        //
    }
    public function show(Profile $profile)
    {
        // return $profile;
    }
    public function update(Request $request, Profile $profile)
    {
      $data = $request->all();
      $data['password'] = Hash::make($request->password);
      $profile->fill($data)->save();
    }
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return response()->json('you have deleted the profile');
    }
}
