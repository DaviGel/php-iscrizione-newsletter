<?php
  $email = $_GET['email'] ?? '';
  function isValidEmail($email) {
    $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
    if (preg_match($pattern, trim($email))) return true; 
    else return false;
  }
?>