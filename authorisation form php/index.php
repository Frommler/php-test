<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Php form check</title>
  <link rel='stylesheet' type='text/css' href='style.css'>
</head>

<body>
  <form name="test" action="check.php" method="POST">
    <label for="#">Name</label><br>
    <input type="text" name="name" placeholder="Name"><br>
    <label for="#">Email</label><br>
    <input type="text" name="email" placeholder="Email"><br>
    <label for="#">Message</label><br>
    <textarea name="message" id="" cols="30" rows="10"></textarea><br>
    <br>
    <input type="submit" name="done" value="Send">
  </form>
</body>

</html>