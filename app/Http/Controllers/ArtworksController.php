<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
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

    public function show($id) {
      $artwork = Artwork::find($id);
      return view('artworks.show', [
        'title' => 'Inquire about ' . $artwork->title,
        'artwork' => $artwork
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
        // 'image' => 'mimes:jpeg,jpg,png'
      ]);

      $artwork = new Artwork;

      $file = request()->file('image');

      if (!request()->has('sold')) {
        request()->merge(['sold' => 0]);
      }

      $artwork->title = request('title');
      $artwork->description = request('description');
      $artwork->price = request('price');
      $artwork->sold = request('sold');
      if (isset($file)) {
        $filename  = 'artwork/' . time() . '.jpg';
        $image = Image::make($file);
        $image->resize(800, null, function ($constraint) {
          $constraint->aspectRatio();
          $constraint->upsize();
        })->save('storage/'. $filename);
        $artwork->image = $filename;
      }
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

      if (!request()->has('sold')) {
        request()->merge(['sold' => 0]);
      }

      $file = request()->file('image');

      $artwork->title = request('title');
      $artwork->description = request('description');
      $artwork->price = request('price');
      $artwork->sold = request('sold');
      if (isset($file)) {
        if ($artwork->image) {
          Storage::delete($artwork->image);
        }
        $filename  = 'artwork/' . time() . '.jpg';
        $image = Image::make($file->getRealPath());
        $image->resize(800, null, function ($constraint) {
          $constraint->aspectRatio();
          $constraint->upsize();
        });
        $image->save('storage/'. $filename);
        $artwork->image = $filename;
      }
      $artwork->update();

      return redirect('/');
    }

    public function destroy($id)
    {
      $artwork = Artwork::find($id);

      Storage::delete($artwork->image);
      $artwork->delete();

      return redirect('/');
    }

}
