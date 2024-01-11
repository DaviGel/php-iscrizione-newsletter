<?php 
  // require_once __DIR__ . '/session.php';
  session_start();
  if(!isset($_SESSION['email'])) {
    $_SESSION['email'] = '';
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thank you</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /Bootstrap -->
  </head>
  <body class="pt-5">
    <div class="container">
      <h1 class="text-center">Thank you for the registration!</h1>
      <p class="text-center">Your email address is: <?php echo $_SESSION['email']; ?></p>
    </div>
    <?php
      session_unset();
      session_destroy();
    ?>
  </body>
</html>