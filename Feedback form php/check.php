<?php
if ($_POST["name"] == "") {
  echo "<div>Insert : Name. <a href='index.php'>Restart</a></div>";
} elseif ($_POST["email"] == "") {
  echo "<div>Insert : email. <a href='index.php'>Restart</a></div>";
} elseif ($_POST["message"] == "") {
  echo "<div>Insert : message. <a href='index.php'>Restart</a></div>";
} else {
  header("Location:index.php");
}
