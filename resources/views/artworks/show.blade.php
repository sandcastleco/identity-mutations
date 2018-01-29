@extends('page')

@section('content')

  <div class="w-100 h5 bg-gray"></div>
  <p>{{ $artwork->description }}</p>
  <p>{{ $artwork->price }} USD</p>

  <form class="mw6 center">

    <label class="db mb1" for="name">Your name</label>
    <input type="text" id="name" name="name" class="db w-100 pa2 marvel" required>

    <label class="db mb1" for="email">Your e-mail address</label>
    <input id="email" type="email" class="db w-100 pa2 marvel" name="email" value="{{ old('email') }}" required>

    <textarea class="pa2 w-100">I would like to inquire about {{ $artwork->title }}</textarea>
    <button type="submit">Send</button>
  </form>

@endsection
