@extends('page')

@section('content')

  <form method="POST" action="/artwork/{{ $artwork->id }}">

    {{ csrf_field() }}

    {{ method_field('PUT') }}

    <label for="title">Title</label>
    <input type="text" id="title" name="title" value="{{ $artwork->title }}">

    <label for="description">Description</label>
    <textarea id="description" name="description">{{ $artwork->description }}</textarea>

    <label for="price">Price</label>
    <input type="number" id="price" name="price" value="{{ $artwork->price }}">

    <button type="submit">Update</button>
  </form>

@endsection
