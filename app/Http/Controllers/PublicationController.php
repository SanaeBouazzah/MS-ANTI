<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PublicationRequest;

class PublicationController extends Controller
{
    public function index()
    {  
      $posts = Publication::all();
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(PublicationRequest $request)
    {
       $posts = $request->validated();
       $posts['image'] = Storage::disk('public')->put('images', $request->file('image'));
        Publication::create($posts);
        return redirect()->route('posts.index')->with('message', 'You Have Created Post Successfully !!!!');
    }
    public function show(Publication $publication)
    {
        //
    }
    public function edit(Publication $publication)
    {
        //
    }
    public function update(Request $request, Publication $publication)
    {
        //
    }
    public function destroy(Publication $publication)
    {
        //
    }
}
