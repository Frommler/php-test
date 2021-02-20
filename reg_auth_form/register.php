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
  <!-- Registration form-->
  <form class="authForm" action="vendor/signup.php" method="post" enctype="multipart/form-data">
    <label for="">Name</label>
    <input type="text" placeholder="Name" name="full_name">
    <label for="">Login</label>
    <input type="text" placeholder="Login" name="login">
    <label for="">Email</label>
    <input type="email" placeholder="email" name="email">
    <label for="">Avatar</label>
    <input type="file" name="avatar">
    <label for="">Password</label>
    <input type="password" placeholder="password" name="password">
    <label for="">Confirm Password</label>
    <input type="password" placeholder="confirm password" name="password_confirm">
    <button type="submit">Registration</button>
    <p>
      Have an account? <a href="index.php">Login</a>!
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