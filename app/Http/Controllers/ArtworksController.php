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
      return view('artworks.create', ['title' => 'Create a post']);
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
}
