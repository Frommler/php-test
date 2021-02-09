<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='css/style.css'>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
  <title>Contact form</title>
</head>

<body>
  <?php require 'blocks/header.php' ?>
  <div class="container mt-5">
    <h3>Contact form</h3>
    <form action="check.php" method="POST">
      <input type="email" class="form-control" name="email" placeholder="Your email"><br>
      <textarea name="message" class="form-control" placeholder="Your message"></textarea><br>
      <button type="submit" name="send" class="btn btn-succes">send</button>
    </form>
    <?php require 'blocks/footer.php' ?>
</body>

</html>