<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PublicationRequest;

class PublicationController extends Controller
{
    public function index()
    {  
      $publications = Publication::latest()->get();
        return view('publications.index', compact('publications'));
    }
    public function create()
    {
        return view('publications.create');
    }
    public function store(PublicationRequest $request)
    {
       $publications = $request->validated();
       if($request->file('image') !== NULL){
        $publications['image'] = Storage::disk('public')->put('images', $request->file('image'));
      }
      $publications['profile_id'] = Auth::id();
        Publication::create($publications);
        return redirect()->route('publications.index')->with('message', 'You Have Created Post Successfully !!!!');
    }
    public function show(Publication $publication)
    {
        //
    }
    public function edit(Publication $publication, Request $request)
    {
       if($request->user()->can('update', $publication)){
        abort(403);
       }
        return view('publications.edit', compact('publication'));
    }
    public function update(PublicationRequest $request, Publication $publication)
    {
      $publications = $request->validated();
      if($request->file('image') !== NULL){
        $publications['image'] = Storage::disk('public')->put('images', $request->file('image'));
      }
       $publication->fill($publications)->save();
       return redirect()->route('publications.index')->with('message', 'You Have Updated Post Successfully !!!!');
    }
    public function destroy(Publication $publication)
    {
      $publication->delete();
      return redirect()->route('publications.index')->with('message', 'You Have Deleted Post Successfully !!!!');
    }
}
