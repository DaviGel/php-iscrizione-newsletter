<?php 
  // require_once __DIR__ . '/session.php';
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP iscrizione Newsletter</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /Bootstrap -->
  </head>
  <body class="pt-5">
    <div class="container">
      <h1 class="text-center">PHP Iscrizione Newsletter</h1>
      <form action="" method="GET">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
          <!-- Ricorda di modificare type in email dopo aver verificato che la validazione funzioni -->
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
      </form>
      <?php include_once __DIR__ . "/functions.php"; ?>
      <!-- <div class="alert <?php if($email !== '' && isValidEmail($email) === true){ echo 'alert-success';} elseif($email !== '') {echo 'alert-danger'; } ?> mt-3" role="alert">
      <?php if($email !== '' && isValidEmail($email) === true) : ?> L'email inserita è valida <?php elseif($email !== '') : ?> L'email inserita non è valida <?php endif; ?> -->
      <?php
        if($email !== '' && isValidEmail($email)) {
          $_SESSION['email'] = $email;
          header('Location: thankyou.php');
          die;
        } elseif($email !== '') {
          echo '<div class="alert alert-danger mt-3" role="alert"> L\'email inserita non è valida </div>';
        }
      ?>
      </div>
    </div>
  </body>
</html>