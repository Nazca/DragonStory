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

  function checkUserLogin($email, $password){
    //this function should check this cleaned information against the databse to see if the user exists.
    //if the user exists it should invoke the DisplayManager with a command to display the home screen with the current logged in user's id as a property.



    if ($email == null || $password == null){
      //there was some sort of error with their login information, return false
      die('no uid or pwd sent');
    }else{

      //check their login information in the sql database
      require("config.inc.php");
      $mysqli = new mysqli($SQLserver, $SQLuser, $SQLpassword, $SQLdatabase);
      if($mysqli->connect_error) {
        exit('Error connecting to database'); //Should be a message a typical user could understand in production
      }

      $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $result = $stmt->get_result();

        if($result->num_rows === 0){



          //redirect back to the engine
          return false ;
        }
          while($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $names = $row['email'];
            $passHash = $row['password'];
        }

        if (password_verify($password, $passHash)){
          //the password is correct
          $_SESSION['userid'] = $id ;

          return $id ;
        }else{
          //the password is incorrect


          return false ;
        }

      $stmt->close();
    }

  }
