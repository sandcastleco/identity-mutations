@extends('page')

@section('content')
  @foreach ($artworks as $artwork)
    <div>
      <h2>{{ $artwork->title }}</h2>
      <p>{{ $artwork->description }}</p>
      <p>${{ $artwork->price }}</p>
      @if (Auth::check())
        <a href="/artwork/{{ $artwork->id }}/edit">Edit</a>
        <form method="POST" action="/artwork/{{ $artwork->id }}">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <button type="submit">Delete</button>
        </form>
      @endif
    </div>
  @endforeach
@endsection
