<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artwork;

class ArtworksController extends Controller
{

    public function index()
    {
      $artworks = Artwork::all();
      return view('artworks.index', [
        'title' => 'Gallery',
        'artworks' => $artworks
      ]);
    }

    public function create()
    {
      $this->middleware('auth');
      return view('artworks.create', ['title' => 'New Artwork']);
    }

    public function store()
    {
      $this->middleware('auth');
      $artwork = new Artwork;

      $artwork->title = request('title');
      $artwork->description = request('description');
      $artwork->price = request('price');
      $artwork->save();

      return redirect('/');

    }

    public function edit($id)
    {
      $artwork = Artwork::find($id);
      return view('artworks.edit', ['artwork' => $artwork, 'title' => 'Edit Artwork']);
    }
}
