<?php

namespace App\Http\Controllers\API;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        //
    }
    public function update(Request $request, Profile $profile)
    {
        //
    }
    public function destroy(Profile $profile)
    {
        //
    }
}
