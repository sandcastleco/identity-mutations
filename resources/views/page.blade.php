@extends('layouts.app')

@section('header')
  <h1 class="tr mt0">{{ $title }}</h1>
@endsection

@section('content')
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
        @yield('main')
      </div>
    </div>
  </div>
@endsection
