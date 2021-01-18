<?php
session_start();
require('functions.inc.php');

if ($_POST['email'] == null || $_POST['password'] == null){
  //user didn't fill out the fields
  header('location: ../index.php');
  exit();
}

if (($_SESSION['userid'] = checkUserLogin($_POST['email'], $_POST['password'])) && (checkUserLogin($_POST['email'], $_POST['password']) !== false)){
  //we are logged in, go to the engine

  header('location: ../engine.php');
}else{

  //login failed for some reason go back to login.php
  header('location: ../index.php');
  exit();
}
