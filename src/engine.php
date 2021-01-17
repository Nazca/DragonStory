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
$loggedIn; //set a flag to see whether or not we are logged in.

//define the file location
define('__ROOT__', dirname(dirname(__FILE__)));



$inputController = new InputController();
$displayManager  = new DisplayManager();
$gameManager = new GameManager();

$displayManager->displayError();


//invoke the input Controller



if (isset($_GET['logout'])){
  $inputController->logout() ;
  exit();
}elseif (isset($_GET['login'])){
  //$inputController->login();
  die('Login is now handled procedurally so that the engine can expect a logged in uyser.');
}elseif (isset($_GET['register'])){
  //$inputController->register() ;
  die('Registration is now handled procedurally so that the engine can expect a logged in user.');
}else{

}

$displayManager->displayHome() ;

?>
