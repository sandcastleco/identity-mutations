<form method="POST" action="/logout">
  {{ csrf_field() }}
  <button class="marvel pointer dib mt2 ph3 pv2 link ims-black ba b--ims-black bg-transparent ttu tracked" type="submit">Log out</button>
</form>
