<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicationRequest;
use App\Models\Publication;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
       $posts = $request->post();
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
