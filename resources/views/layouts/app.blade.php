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
  <body class="marvel bg-moon-gray pb4">
    <header class="mh3 pv3">
      <a class="db mb3 f1 link white" href="/">IM<span class="ims-black">(S)</span></a>
      <nav role="navigation">
        <ul class="list mv0 pl0">
          <li class="mb2 pa2 bg-white-10 tr bl b--gray bw1"><a class="link gray" href="/about">About</a></li>
          <li class="mb2 pa2 bg-white-10 tr bl b--gray bw1"><a class="link gray" href="/contact">Contact</a></li>
          <li class="mb2 pa2 bg-white-10 tr bl b--gray bw1"><a class="link gray" href="/">Gallery</a></li>
        </ul>
      </nav>

      @if (Auth::check())
        @include('partials.logout-button')
        <a href="/artwork/create">New Artwork</a>
      @endif
    </header>

    <div class="mw8 center mh3 pa3 bg-white-20 bl bw1" role="main">
      @yield('header')
      @yield('content')
    </div>

    @include('partials.footer')
  </body>
</html>
