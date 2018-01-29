@extends('page')

@section('content')
  <div class="flex-ns flex-wrap">
  @foreach ($artworks as $artwork)
    <div class="w-25-ns ph3-ns mb4">
      <div class="w-100 h5 bg-gray"></div>
      <h2>{{ $artwork->title }}</h2>
      <p>{{ $artwork->description }}</p>
      <p>{{ $artwork->price }} USD</p>
      <a class="db tc ttu tracked mt2 ph3 pv2 link ims-black ba b--ims-black" href="/artwork/{{ $artwork->id }}">Inquire</a>
      @if (Auth::check())
        <div>
          <a href="/artwork/{{ $artwork->id }}/edit">Edit</a>
          <form method="POST" action="/artwork/{{ $artwork->id }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit">Delete</button>
          </form>
        </div>
      @endif
    </div>
  @endforeach
  </div>
@endsection
