<center>
  <h2>Login Admin</h2>
  <form action="/admin/login" method="POST" autocomplete="on">
    {{ csrf_field() }}
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="submit" value="Sign In">
  </form>
</center>
