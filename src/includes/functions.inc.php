<?php
require_once("../classes/GameManager.php");
require_once("../classes/InputController.php");




function register(){
  //we want to register the user
  //$_POST['email'] email2, password and password2 should be set.
  $email = $_POST['email'] ;
  $password = $_POST['password'] ;

  //first lets check that the emails and password are the same thing

  if ($email == $_POST['email2'] && $password = $_POST['password2']){
    //the user input the same values as email and password

    //clean the input and invoke the game manager to add them to the database
    $inputController = new InputController() ;

    $email = $inputController->clean($email);
    $password = $inputController->clean($password);


    //invoke the game manager to register a new users
    //we invoke the game manager here because the code already works.
    $gameManager = new GameManager() ;
    $gameManager->registerNewUser($email, $password); //the game manager will redirect us to login

  }else{
    //we will not be using the displaymanager to set an error here
    //we will simply redirect back to register.php with a get error imap_setacl



  }

}
