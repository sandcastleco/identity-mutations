@extends('page')

@section('main')

  @component('components.panel', ['classes' => 'show order-last-ns', 'wide' => true])
    @slot('title')
      Gallery
    @endslot

    <div class="flex-ns flex-wrap center">
    @foreach ($artworks as $artwork)
      <div class="w-25-ns ph3-ns mb4">
        @if($artwork->image)
          <img src="{{ asset('storage/' . $artwork->image)}}">
        @else
          <div class="w-100 h5 bg-gray"></div>
        @endif
        <h3 class="mt2">{{ $artwork->title }}</h3>
        @if($artwork->description)
          <p>{{ $artwork->description }}</p>
        @endif

        @if($artwork->price)
          <p>{{ number_format($artwork->price, 0, '.', ',') }} USD</p>
        @else
          <p class="mv4">Please inquire for pricing.</p>
        @endif
        @if ($artwork->sold)
          <p class="db tc ttu tracked mt2 mb0 ph3 pv2 link ims-gray ba b--ims-gray f4">Sold</p>
        @else
          <a class="db tc ttu tracked mt2 ph3 pv2 link ims-black ba b--ims-black f4" href="/artwork/{{ $artwork->id }}">Inquire</a>
        @endif
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
  @endcomponent

@endsection
