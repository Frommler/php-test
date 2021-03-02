<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $message = $_POST['message'];
}