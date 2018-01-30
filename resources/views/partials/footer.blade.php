<footer class="tc vh-10 flex items-center justify-center">
  <p class="mv0">&copy; <?php echo date('Y'); ?> Identity Mutations
  @if (!Auth::check())
    • <a class="ims-black" href="/login">Log in</a>
  @endif
  </p>
</footer>

<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="/js/app.js"></script>
