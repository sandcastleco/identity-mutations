@extends('admin')

@section('main')

  <?php phpinfo(); ?>

  @include('partials.errors')

  <form class="mw6 center ph3" method="POST" action="/artworks" enctype='multipart/form-data'>

    {{ csrf_field() }}

    <div class="mb3">
      <label class="db mb1" for="title">Title</label>
      <input class="db w-100 pa2 marvel ba b--ims-gray" type="text" id="title" name="title" required autofocus>
    </div>

    <div class="mb3">
      <label class="db mb1" for="description">Description</label>
      <textarea class="db w-100 pa2 marvel ba b--ims-gray" id="description" name="description"></textarea>
    </div>

    <div class="mb3">
      <label class="db mb1" for="price">Price</label>
      <input class="db w-100 pa2 marvel ba b--ims-gray" type="number" id="price" name="price">
    </div>

    <div class="mb3">
      <label class="db mb1" for="image">Image</label>
      <input class="db w-100 pa2 marvel ba b--ims-gray" type="file" id="image" name="image">
    </div>

    <div class="mb3">
      <input type="checkbox" name="sold" value="1"> Sold
    </div>

    <button class="marvel pointer dib mt2 ph3 pv2 link ims-black ba b--ims-black bg-transparent ttu tracked" type="submit">Create</button>
  </form>

@endsection
