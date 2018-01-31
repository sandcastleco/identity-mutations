<div class="panel flex bg-white-80 bb bw1 {{ $classes }}">
  <div class="panel-header pointer w-100">
    <h2 class="w-100 ims-black f4 mv0">{{ $title }}</h2>
  </div>
  <div class="panel-body w-100">
    @if(isset($wide))
      {{ $slot }}
    @else
      <div class="mw6 center">
        {{ $slot }}
      </div>
    @endif
  </div>
</div>
