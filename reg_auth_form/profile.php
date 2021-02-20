<?php
session_start();

if (!$_SESSION['user']) {
  header('Location: index.php');
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
  <!-- Profile-->
  <div>
    <img src="<?= $_SESSION['user']['avatar'] ?>" width="100">
    <p><?= $_SESSION['user']['full_name'] ?></p>
    <a href="#"><?= $_SESSION['user']['email'] ?></a><br>
    <a href="vendor/logout.php" class="logout">Log out</a>
  </div>
</body>

</html>