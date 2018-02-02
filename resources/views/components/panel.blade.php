<div class="panel mb3 mh3 ma0-ns flex bg-white-80 bl bl-0-ns bb-ns bw1 bw1-ns {{ $classes }}">
  <div class="panel-header pointer absolute w-100">
    <h2 class="ims-black f4 mv0 w-100">{{ $title }}</h2>
  </div>
  <div class="panel-body w-100 ml4">
    @if(isset($wide))
      {{ $slot }}
    @else
      <div class="mw6 center">
        {{ $slot }}
      </div>
    @endif
  </div>
</div>
