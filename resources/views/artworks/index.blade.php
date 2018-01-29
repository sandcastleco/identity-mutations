@extends('page')

@section('content')
  @foreach ($artworks as $artwork)
    <div>
      <h2>{{ $artwork->title }}</h2>
      <p>{{ $artwork->description }}</p>
      <p>${{ $artwork->price }}</p>
      @if (Auth::check())
        <a href="/artwork/{{ $artwork->id }}/edit">Edit</a>
      @endif
    </div>
  @endforeach
@endsection
