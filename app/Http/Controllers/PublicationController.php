<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
       $titre =  $request->titre; 
       $body = $request->body; 
       $image = $request->image; 
       $posts = [
        'titre' => $titre,
         'body'=> $body,
         'image' => $image
       ];
        Publication::create($posts);
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
