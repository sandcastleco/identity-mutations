@extends('page')

@section('content')

  <form method="POST" action="/artworks">

    {{ csrf_field() }}
    
    <label for="title">Title</label>
    <input type="text" id="title" name="title">

    <label for="description">Description</label>
    <textarea id="description" name="description"></textarea>

    <label for="price">Price</label>
    <input type="number" id="price" name="price">

    <button type="submit">Create</button>
  </form>

@endsection
