<?php

session_start();

$email = $_SESSION['email'];
$_SESSION['email'] = '';
