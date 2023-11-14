<?php

namespace App\Http\Controllers\API;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProfileResource;
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
        return new ProfileResource($profile);
        dd($profile);
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
