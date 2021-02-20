<?php

  $connect = mysqli_connect('localhost', 'root', '', 'reg_auth_db');

  if (!$connect) {
    die('Error DB connect');
  }