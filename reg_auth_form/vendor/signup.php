<?php
session_start();
require_once 'connect.php'; //connect to DB

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) { //check password
  $path = 'uploads/' . time() . $_FILES['avatar']['name'];  //save avatar with time code in name
  if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) { //error is name is wrong
    $_SESSION['message'] = 'Upload error';
    header('Location: ../register.php');
  }

  $password = md5($password); //hash password

  mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')"); //add user in DB
  $_SESSION['message'] = 'registration successful'; //show message if add in DB is ok
  header('Location: ../index.php');


} else {
  $_SESSION['message'] = 'wrong password confirm'; //show message if password is not ok
  header('Location: ../register.php');
}
