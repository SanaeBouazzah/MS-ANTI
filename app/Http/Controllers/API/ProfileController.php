<?php

namespace App\Http\Controllers\API;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;
use App\Http\Resources\ProfileResource;

class ProfileController extends Controller
{
  private const CACHE_KEY = 'profiles_api';
  public function index()
  {
    $profiles = Cache::remember(self::CACHE_KEY, 10, function (){
      return ProfileResource::collection(Profile::all());
    });
    
    return $profiles;
  }
  public function store(Request $request)
  {
    $data = $request->all();
    $data['password'] = Hash::make($request->password);
    Profile::create($data);
    Cache::forget(self::CACHE_KEY);
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
