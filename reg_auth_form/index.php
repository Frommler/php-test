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
    <?php
    if ($_SESSION['message']) { // show messages
      echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']); //delete messages
    ?>
  </form>
</body>

</html>