@component('components.panel', ['classes' => 'mr2'])
  @slot('title')
    About
  @endslot

  <p class="mt1 f4 lh-copy">{{ $site_description }}</p>
  @if (Auth::check())
    @if (!$site_description)
      <p>No description set.</p>
      <a class="dib mr2 ph3 pv2 tc ttu tracked link ims-black ba b--ims-black" href="/settings">Add description</a>
    @else
      <a class="dib mr2 ph3 pv2 tc ttu tracked link ims-black ba b--ims-black" href="/settings">Edit</a>
    @endif
  @endif
@endcomponent

@component('components.panel', ['classes' => 'mr2'])
  @slot('title')
    Contact
  @endslot

  <form method="POST" action="/contact" class="pb4">

    {{ csrf_field() }}

    <div class="mb3">
      <label class="db mb1" for="name">Your name</label>
      <input type="text" id="name" name="name" class="db w-100 pa2 marvel ba b--ims-gray" required>
    </div>

    <div class="mb3">
      <label class="db mb1" for="email">Your e-mail address</label>
      <input id="email" type="email" class="db w-100 pa2 marvel ba b--ims-gray" name="email" value="{{ old('email') }}" required>
    </div>

    <div class="mb3">
      <label class="db mb1" for="message">Your message</label>
      <textarea class="pa2 w-100 marvel ba b--ims-gray" name="message"></textarea>
    </div>

    <button class="marvel pointer dib mt2 ph3 pv2 link ims-black ba b--ims-black bg-transparent ttu tracked" type="submit">Send</button>
  </form>
@endcomponent
