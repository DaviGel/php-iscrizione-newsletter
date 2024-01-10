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
      <h1>PHP iscrizione Newsletter</h1>
      <form action="" method="GET">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
          <!-- Ricorda di modificare type in email dopo aver verificato che la validazione funzioni -->
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
      </form>
      <?php
        $email = $_GET['email'] ?? '';
        function isValidEmail($email) {
          $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
          if (preg_match($pattern, trim($email))) return true; 
          else return false;
        }
      ?>
      <?php if($email !== '' && isValidEmail($email) === true) : ?>
      <div class="alert alert-success mt-3" role="alert">
        L'email inserita è valida!
      </div>
      <?php elseif($email !== '') : ?>
      <div class="alert alert-danger mt-3" role="alert">
        L'email inserita non è valida
      </div>
      <?php endif; ?>
    </div>
  </body>
</html>