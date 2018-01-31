@component('components.panel', ['classes' => 'mr2'])
  @slot('title')
    About
  @endslot

  <p class="mt1 f4 lh-copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eleifend, est quis molestie sodales, leo risus malesuada sem, eu tempus lacus orci ut velit. Mauris iaculis elit ac erat blandit, quis fringilla purus ornare. Pellentesque vitae interdum nunc. Vestibulum rhoncus enim non mollis consequat. Proin nunc tellus, finibus id tortor nec, varius malesuada massa. Ut placerat lacus id nisl egestas lobortis. In mattis at elit sed feugiat. In quis arcu rutrum velit viverra facilisis sed a orci. Mauris sed ex quis justo fringilla iaculis id eget elit. Etiam porta dolor a leo ultricies tempus. Cras faucibus ex pulvinar, feugiat est eu, vestibulum dui. Fusce at malesuada lectus. Suspendisse sit amet egestas ligula. Duis sit amet lacinia ligula, ut condimentum neque.</p>
@endcomponent

@component('components.panel', ['classes' => 'mr2'])
  @slot('title')
    Contact
  @endslot

  <form method="POST" action="/contact" class="mw6 center pb4">

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
