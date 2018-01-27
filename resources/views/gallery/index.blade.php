@extends('page')

@section('content')
  @foreach ($artworks as $artwork)
    <div>
      <h2>{{ $artwork->title }}</h2>
      <p>{{ $artwork->description }}</p>
      <p>${{ $artwork->price }}</p>
    </div>
  @endforeach
@endsection
