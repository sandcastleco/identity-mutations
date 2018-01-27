<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Identity Mutations</title>
    {{-- <link rel="stylesheet" href="https://unpkg.com/tachyons@4.9.1/css/tachyons.min.css"/> --}}
  </head>
  <body class="avenir bg-moon-gray">
    <header>
      <a class="db mb0 pa2" href="/">Identity Mutations</a>
      <nav role="navigation">
        <ul class="list mv0 pl0 ph2">
          <li class="mb2 pa2 bg-white-10 tr bl b--gray bw1"><a class="link gray" href="/about">About</a></li>
          <li class="mb2 pa2 bg-white-10 tr bl b--gray bw1"><a class="link gray" href="/contact">Contact</a></li>
          <li class="mb2 pa2 bg-white-10 tr bl b--gray bw1"><a class="link gray" href="/">Gallery</a></li>
        </ul>
      </nav>
    </header>

    <div role="main">
      @yield('header')
      @yield('content')
    </div>

  </body>
</html>
