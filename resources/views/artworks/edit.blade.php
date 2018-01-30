@extends('admin')

@section('main')

  <form method="POST" action="/artwork/{{ $artwork->id }}">

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

    <button type="submit" class="marvel pointer dib mt2 ph3 pv2 link ims-black ba b--ims-black bg-transparent ttu tracked">Update</button>
  </form>

@endsection
