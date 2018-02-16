<center>
  <form action="/register" method="POST" autocomplete="on">
    {{ csrf_field() }}
    <input type="text" name="firstname" placeholder="First Name"><br>
    <input type="text" name="lastname" placeholder="Last Name"><br>
    <input type="text" name="username" placeholder="Username"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="date" name="birthdate" placeholder="Birth Date"><br>
    <input type="text" name="birthplace" placeholder="Birth Place"><br>
    <select name="gender">
      <option selected>Gender</option>
      <option value="m">Male</option>
      <option value="f">Female</option>
    </select><br>
    <input type="number" name="phone" placeholder="Phone Number"><br>
    <input type="password" name="password" placeholder="Kata Sandi" required><br>
    <input type="password" name="password_confirmation" maxlength="24" placeholder="Kata Sandi" required><br>
    <input type="submit" value="Register">
  </form>
</center>
