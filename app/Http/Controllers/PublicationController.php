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
      $publications = Publication::all();
        return view('publications.index', compact('publications'));
    }
    public function create()
    {
        return view('publications.create');
    }
    public function store(PublicationRequest $request)
    {
       $publications = $request->validated();
       $publications['image'] = Storage::disk('public')->put('images', $request->file('image'));
        Publication::create($publications);
        return redirect()->route('publications.index')->with('message', 'You Have Created Post Successfully !!!!');
    }
    public function show(Publication $publication)
    {
        //
    }
    public function edit(Publication $publication)
    {
        return view('publications.edit', compact('publication'));
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
