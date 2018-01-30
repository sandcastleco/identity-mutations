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
    <header class="vh-10 flex items-center ph3">
      <a class="db f1 link white" href="/">IM<span class="ims-black">(S)</span></a>
      {{-- <nav role="navigation">
        <ul class="list mv0 pl0">
          <li class="mb2 pa2 bg-white-10 tr bl b--gray bw1"><a class="link gray" href="/about">About</a></li>
          <li class="mb2 pa2 bg-white-10 tr bl b--gray bw1"><a class="link gray" href="/contact">Contact</a></li>
          <li class="mb2 pa2 bg-white-10 tr bl b--gray bw1"><a class="link gray" href="/">Gallery</a></li>
        </ul>
      </nav> --}}

      @if (Auth::check())
        @include('partials.logout-button')
        <a href="/artwork/create">New Artwork</a>
      @endif
    </header>

    <div class="vh-80" role="main">
      <div class="grid">
        <div class="panel bg-white-80 bb bw1 mr2">
          <div class="panel-header">
            <a class="ims-black f4" href="#">About</a>
          </div>
          <div class="panel-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eleifend, est quis molestie sodales, leo risus malesuada sem, eu tempus lacus orci ut velit. Mauris iaculis elit ac erat blandit, quis fringilla purus ornare. Pellentesque vitae interdum nunc. Vestibulum rhoncus enim non mollis consequat. Proin nunc tellus, finibus id tortor nec, varius malesuada massa. Ut placerat lacus id nisl egestas lobortis. In mattis at elit sed feugiat. In quis arcu rutrum velit viverra facilisis sed a orci. Mauris sed ex quis justo fringilla iaculis id eget elit. Etiam porta dolor a leo ultricies tempus. Cras faucibus ex pulvinar, feugiat est eu, vestibulum dui. Fusce at malesuada lectus. Suspendisse sit amet egestas ligula. Duis sit amet lacinia ligula, ut condimentum neque.</p>
          </div>
        </div>
        <div class="panel bg-white-80 bb bw1 mr2">
          <div class="panel-header">
            <a class="ims-black f4" href="#">Contact</a>
          </div>
          <div class="panel-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eleifend, est quis molestie sodales, leo risus malesuada sem, eu tempus lacus orci ut velit. Mauris iaculis elit ac erat blandit, quis fringilla purus ornare. Pellentesque vitae interdum nunc. Vestibulum rhoncus enim non mollis consequat. Proin nunc tellus, finibus id tortor nec, varius malesuada massa. Ut placerat lacus id nisl egestas lobortis. In mattis at elit sed feugiat. In quis arcu rutrum velit viverra facilisis sed a orci. Mauris sed ex quis justo fringilla iaculis id eget elit. Etiam porta dolor a leo ultricies tempus. Cras faucibus ex pulvinar, feugiat est eu, vestibulum dui. Fusce at malesuada lectus. Suspendisse sit amet egestas ligula. Duis sit amet lacinia ligula, ut condimentum neque.</p>
          </div>
        </div>
        <div class="panel bg-white-80 bb bw1 show">
          <div class="panel-header">
            <a class="ims-black f4" href="#">Gallery</a>
          </div>
          <div class="panel-body w-100">
            @yield('content')
          </div>
        </div>
      </div>
      {{-- @yield('header')
      @yield('content') --}}
    </div>

    @include('partials.footer')
  </body>
</html>
