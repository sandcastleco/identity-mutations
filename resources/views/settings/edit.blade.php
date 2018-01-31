@extends('admin')

@section('main')

  @if ($setting)
  <form method="POST" action="/settings">

    {{ csrf_field() }}

    {{ method_field('PUT') }}

    <div class="mb3">
      <label class="db mb1" for="description">Description</label>
      <textarea rows="20" class="db w-100 pa2 marvel ba b--ims-gray" id="description" name="description">{{ $setting->description }}</textarea>
    </div>

    <button type="submit" class="marvel pointer dib mt2 ph3 pv2 link ims-black ba b--ims-black bg-transparent ttu tracked">Save</button>
  </form>
  @else

  <form method="POST" action="/settings">

    {{ csrf_field() }}

    <div class="mb3">
      <label class="db mb1" for="description">Description</label>
      <textarea rows="20" class="db w-100 pa2 marvel ba b--ims-gray" id="description" name="description"></textarea>
    </div>

    <button type="submit" class="marvel pointer dib mt2 ph3 pv2 link ims-black ba b--ims-black bg-transparent ttu tracked">Save</button>
  </form>
  
  @endif

@endsection
