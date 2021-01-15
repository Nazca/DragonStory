<?php
require_once("classes/DisplayManager.php");
require_once("classes/GameManager.php");
require_once("classes/InputController.php");
//this is the main file called when the user is viewing, giving input, or otherwise monitering the gamestate.

//it's possible that we've ended up here without sending any log in information.

//we should check to see if a user is logged in real quick  If they are and we have no input, display the game state on the home page
//if we have log in information lets give that to the InputController so that we may clean it, modify the game state, and display it to the users

//if they are not logged in and we have no input lets redirect to index.php

session_start(); //this will allow us to use the session to see if a user is logged in or not.

$loggedIn; //set a flag to see whether or not we are logged in.



if (isset($_SESSION['userid']) && $_SESSION['userid'] != null && $_SESSION['userid'] != 0){
  //We are definitely logged in!
  $loggedIn = true ;
}else{
  //we are definitely not logged in.
  $loggedIn = false ;
}



//now we can do two seperate things based on our flag of $loggedIn
var_dump($_POST);


//invoke the input Controller

$inputController = new InputController();

//method login() of class InputController expects arguments email and password

$inputController->login($_POST['email'], $_POST['password']);
?>
