@extends('page')

@section('main')
  <div class="flex-ns flex-wrap center">
  @foreach ($artworks as $artwork)
    <div class="w-25-ns ph3-ns mb4">
      <div class="w-100 h5 bg-gray"></div>
      <h2 class="mt2">{{ $artwork->title }}</h2>
      @if($artwork->description)
        <p>{{ $artwork->description }}</p>
      @endif
      <p>{{ number_format($artwork->price, 0, '.', ',') }} USD</p>
      <a class="db tc ttu tracked mt2 ph3 pv2 link ims-black ba b--ims-black f4" href="/artwork/{{ $artwork->id }}">Inquire</a>
      @if (Auth::check())
        <div class="tc">
          <a class="dib mr2 ph3 pv2 tc ttu tracked link ims-black ba b--ims-black" href="/artwork/{{ $artwork->id }}/edit">Edit</a>
          <form class="dib" method="POST" action="/artwork/{{ $artwork->id }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="marvel pointer dib mt2 ph3 pv2 link ims-black ba b--ims-black bg-transparent ttu tracked" type="submit">Delete</button>
          </form>
        </div>
      @endif
    </div>
  @endforeach
  </div>
@endsection
