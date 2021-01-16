<?php
session_start();
require('functions.inc.php');
require('classes/iimysqli_result.php');

if (($_SESSION['userid'] = checkUserLogin($_POST['email'], $_POST['password'])) && (checkUserLogin($_POST['email'], $_POST['password']) !== false)){
  //we are logged in, go to the engine

  header('location: ../engine.php');
}else{
  //login failed for some reason go back to login.php
  header('location: ../login.php');
  exit();
}
