<center>
  <h2>Login User</h2>
  @if ($error = $errors->first('password'))
  <div class="alert alert-danger">
  {{ $error }}
  </div>
  @endif
  <form action="/login" method="POST" autocomplete="on">
    {{ csrf_field() }}
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="submit" value="Sign In">
  </form>
</center>
