<div class="panel mb3 mh3 ma0-ns flex bg-white-80 bl bl-0-ns bb-ns bw1 bw1-ns {{ $classes }}">
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
