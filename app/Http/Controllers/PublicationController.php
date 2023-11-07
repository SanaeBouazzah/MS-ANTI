<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index()
    {
        return 'hi pub';
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
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
