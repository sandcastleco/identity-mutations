@extends('admin')

@section('main')

  <form method="POST" action="/artwork/{{ $artwork->id }}" enctype="multipart/form-data">

    {{ csrf_field() }}

    {{ method_field('PUT') }}

    <div class="mb3">
      <label class="db mb1" for="title">Title</label>
      <input class="db w-100 pa2 marvel ba b--ims-gray" type="text" id="title" name="title" value="{{ $artwork->title }}">
    </div>

    <div class="mb3">
      <label class="db mb1" for="description">Description</label>
      <textarea class="db w-100 pa2 marvel ba b--ims-gray" id="description" name="description">{{ $artwork->description }}</textarea>
    </div>

    <div class="mb3">
      <label class="db mb1" for="price">Price</label>
      <input class="db w-100 pa2 marvel ba b--ims-gray" type="number" id="price" name="price" value="{{ $artwork->price }}">
    </div>

    <div class="flex-ns">
      <div class="mb3 pr3">
        @if ($artwork->image)
          <p class="mt0 mb1">Current image</p>
          <img class="mw4" src="{{ asset('storage/' . $artwork->image)}}" alt="{{ $artwork->title }}">
        @else
          <p class="mv0">No current image</p>
        @endif
      </div>

      <div class="mb3">
        <label class="db mb1" for="image">New image</label>
        <input class="db w-100 pa2 marvel ba b--ims-gray" type="file" id="image" name="image">
      </div>
    </div>

    <div class="mb3">
      <input type="checkbox" name="sold" value="1" {{ $artwork->sold ? 'checked' : '' }}> Sold
    </div>

    <button type="submit" class="marvel pointer dib mt2 ph3 pv2 link ims-black ba b--ims-black bg-transparent ttu tracked">Update</button>
  </form>

@endsection
