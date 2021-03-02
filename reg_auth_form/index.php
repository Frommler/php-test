<?php
session_start();

if ($_SESSION['user']) {
  header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/main.css ">
  <title>Aurtherisation and Registration</title>
</head>

<body class="mainDiv">
  <!-- Authorisation form-->
  <form class="authForm" action="vendor/signin.php" method="post">
    <label for="">Login</label>
    <input type="text" placeholder="login" name="login">
    <label for="">Password</label>
    <input type="password" placeholder="password" name="password">
    <button type="submit">Log in</button>
    <p>
      Have no account? <a href="register.php">Registration</a>!
    </p>
    <p class="msg">Lorem ipsum dolor sit amet.</p> 
  </form>

  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>