<!DOCTYPE html>
<html lang="sv">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/inloggning.css" type="text/css">
</head>
<body>

<h2>Login Form</h2>

<form action="functions/login.php" method="post">

  <div class="container">
    <label for="uname"><b>Username:</b></label>
    <input id="uname" type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input id="psw" type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form>

</body>
</html>