<?php
require_once("classes/DisplayManager.php");
require_once("classes/GameManager.php");
require_once("classes/InputController.php");
require_once("classes/UserManager.php");
//this is the main file called when the user is viewing, giving input, or otherwise monitering the gamestate.

//it's possible that we've ended up here without sending any log in information.

//we should check to see if a user is logged in real quick  If they are and we have no input, display the game state on the home page
//if we have log in information lets give that to the InputController so that we may clean it, modify the game state, and display it to the users

//if they are not logged in and we have no input lets redirect to index.php

session_start(); //this will allow us to use the session to see if a user is logged in or not.
//// DEBUG:
if (isset($_SESSION['userid'])){
  //echo $_SESSION['userid'] . "<br />";
}else{
  //echo "No userid is set" ;
}
$loggedIn; //set a flag to see whether or not we are logged in.

//define the file location
define('__ROOT__', dirname(dirname(__FILE__)));



$inputController = new InputController();
$displayManager  = new DisplayManager();

$displayManager->displayError();



$userManager = new UserManager();

if ($userManager->userLoggedIn() === true){
  //we are logged in.
  echo "We are logged in. UID:"  . $_SESSION['userid'];
  echo "<br /><a href=\"engine.php?logout=true\">Logout</a>";
}


//invoke the input Controller



if (isset($_GET['logout'])){
  $inputController->logout() ;
}

if (isset($_GET['login'])){
  $inputController->login();
}

if (isset($_GET['register'])){
  $inputController->register() ;
}




?>
