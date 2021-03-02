<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') /* Запрос данных от метода POST после отпарвки, если существует */{
  $name = $_POST['name']; // Получение данных из input name="name"
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $message = $_POST['message'];

function clean($value = "") {
  $value = trim($value); //trim для удаления пробелов из начала и конца строки.
  $value = stripslashes($value); //stripslashes нжна дл удал экранированных смвлв ("Вc звт O\'reilly?" => "Вс звт O'reilly?").
  $value = strip_tags($value); //Функция strip_tags нужна для удаления HTML и PHP тегов.
  $value = htmlspecialchars($value); //htmlspecialchars преобразует специальные символы в HTML-сущности ('&' преобразуется в '&amp;' и т.д)
  return $value;
};

function check_length($value = "", $min, $max ) {
  $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
  return !$result;
};

$name = clean($name);
$surname = clean($surname);
$email = clean($email);
$message = clean($message);

if (!empty($name) && !empty($surname) && !empty($email) && !empty($message)) {
  $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL);
  if (check_length($name, 2, 25) && check_length($surname, 2, 50) && check_length($message, 2, 1000) && $email_validate) {
    echo "Thx for message!";
  } else {
    echo "Check fields";
  };
} else {
  echo "Fill all fields";
};

};