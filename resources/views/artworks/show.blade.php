@extends('page')

@section('main')

  @component('components.panel', ['classes' => 'show order-3'])
    @slot('title')
      <a class="link ims-black" href="/">Gallery</a>
    @endslot

    <div class="w-100 h5 bg-gray"></div>

    <div class="mw6 center">
      <h3 class="f3 mb2">{{ $artwork->title }}</h3>
      <p class="mt0 f5 lh-copy">{{ $artwork->description }} Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p class="mv4">{{ $artwork->price }} USD</p>

      @if (!$artwork->sold)
        <form method="POST" action="/artwork/{{ $artwork->id }}/inquiry" class="pb4">

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
      @else
        <p class="db tc ttu tracked mt2 ph3 pv2 link ims-gray ba b--ims-gray f4">Sold</p>
      @endif

    </div>
  @endcomponent

@endsection
