<?php
$email = $_POST['email'];
$message = $_POST['message'];

$error = '';
if (trim($email) == '') {
  $error = 'write your email';
} else if (trim($message) == '') {
  $error = 'write your message';
} else if (strlen($message) < 10) {
  $error = 'Min 10 chr for message';
};

if ($error != '') {
  echo $error;
  exit;
}

$subject = "?utf-8?B?" . base64_encode("Text message") . "?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type:text/html;charset=utf-8\r\n";

mail('admin@gmail.com', $subject, $message, $headers);

header('Location: /index.php');
