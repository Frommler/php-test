<?php
session_start();
require_once 'connect.php'; //connect to DB


$login = $_POST['login']; 
$password = md5($_POST['password']);

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'"); //connect  to DB and search user
if (mysqli_num_rows($check_user) > 0) {
  
  $user = mysqli_fetch_assoc($check_user);

  $_SESSION['user'] = [
    "id" => $user['id'],
    "full_name" => $user['full_name'],
    "avatar" => $user['avatar'],
    "email" => $user['email']
  ];

  header('Location:  ../profile.php');

} else {
  $_SESSION['message'] = 'wrong login or password'; //show message if login or password is not ok
  header('Location: ../index.php');
}
?>

