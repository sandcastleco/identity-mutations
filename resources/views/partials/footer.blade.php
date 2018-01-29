<footer class="pa3 tc">
  <p>&copy; <?php echo date('Y'); ?> Identity Mutations</p>
  @if (Auth::check())
    @include('partials.logout-button')
  @else
    <a class="dib mt2 ph3 pv2 link ims-black ba b--ims-black ttu tracked" href="/login">Log in</a>
  @endif
</footer>
