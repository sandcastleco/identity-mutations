@extends('page')

@section('main')

  <div class="w-100 h5 bg-gray"></div>
  <p>{{ $artwork->description }}</p>
  <p>{{ $artwork->price }} USD</p>

  <form method="POST" action="/artwork/{{ $artwork->id }}/inquiry" class="mw6 center pb4">

    {{ csrf_field() }}

    <div class="mb3">
      <label class="db mb1" for="name">Your name</label>
      <input type="text" id="name" name="name" class="db w-100 pa2 marvel ba b--ims-gray" required>
    </div>

    <div class="mb3">
      <label class="db mb1" for="email">Your e-mail address</label>
      <input id="email" type="email" class="db w-100 pa2 marvel ba b--ims-gray" name="email" value="{{ old('email') }}" required>
    </div>

    <div class="mb3">
      <label class="db mb1" for="message">Your message</label>
      <textarea class="pa2 w-100 marvel ba b--ims-gray" name="message">I would like to inquire about {{ $artwork->title }}.</textarea>
    </div>
    <button class="marvel pointer dib mt2 ph3 pv2 link ims-black ba b--ims-black bg-transparent ttu tracked" type="submit">Send</button>
  </form>

@endsection
