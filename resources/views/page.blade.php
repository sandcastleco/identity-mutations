@extends('layouts.app')

@section('header')
  <h1 class="tr mt0">{{ $title }}</h1>
@endsection

@section('content')
  <div class="panel-container">

    @yield('main')

    @include('partials.sidebar')

  </div>
@endsection
