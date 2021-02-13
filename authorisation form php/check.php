<?php
if ($_POST["name"] == "")
  echo "Insert : Name. <a href='/'>Restart</a>";
elseif ($_POST["email"] == "") {
  echo "Insert : email. <a href='/'>Restart</a>";
} elseif ($_POST["textarea"] == "") {
  echo "Insert : message. <a href='/'>Restart</a>";
} else {
  header("Location:index.php");
}
