<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Identity Mutations</title>
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.9.1/css/tachyons.min.css"/>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body style="background-image: url('{{ asset('images/background.jpg') }}');" class="marvel bg-moon-gray cover">
    <header class="vh-10-ns flex-ns justify-between items-center pb3 pb0-ns ph3">
      <a class="db f1 link white" href="/">IM<span class="ims-black">(S)</span></a>

      @if (Auth::check())
        <div style="flex-grow: 1;" class="tc tr-ns">
          <a class="dib mr2 ph3 pv2 tc ttu tracked link ims-black ba b--ims-black" href="/artwork/create">New Artwork</a>
          @include('partials.logout-button')
        </div>
      @endif
    </header>

    <div role="main">
      @yield('content')
      {{-- @yield('header')
      @yield('content') --}}
    </div>

    @include('partials.footer')
  </body>
</html>
