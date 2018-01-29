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
      return view('artworks.create', ['title' => 'New Artwork']);
    }

    public function store()
    {
      
      $this->validate(request(), [
        'title' => 'required'
      ]);

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

    public function update($id)
    {
      $artwork = Artwork::find($id);

      $artwork->title = request('title');
      $artwork->description = request('description');
      $artwork->price = request('price');
      $artwork->update();

      return redirect('/');
    }

    public function destroy($id)
    {
      $artwork = Artwork::find($id);
      $artwork->delete();
      return redirect('/');
    }

}
