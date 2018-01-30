@extends('admin')

@section('main')
  <h1 class="mt0 tc">Login</h1>

  <form class="mw6 center ph3" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    <div class="mb3">
      <label class="db mb1" for="email">E-mail address</label>
      <input id="email" type="email" class="db w-100 pa2 marvel ba b--ims-gray" name="email" value="{{ old('email') }}" required autofocus>
      @if ($errors->has('email'))
        <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
      @endif
    </div>

    <div class="mb3">
      <label class="db mb1" for="password">Password</label>
      <input id="password" type="password" class="db w-100 pa2 marvel ba b--ims-gray" name="password" required>
      @if ($errors->has('password'))
        <span class="help-block">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
      @endif
    </div>

    <div class="mb2">
      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
    </div>

    <button type="submit" class="marvel pointer dib mt2 ph3 pv2 link ims-black ba b--ims-black bg-transparent ttu tracked">
      Login
    </button>

    <a class="db mv3 link ims-black" href="{{ route('password.request') }}">
      Forgot Your Password?
    </a>
  </form>
@endsection
