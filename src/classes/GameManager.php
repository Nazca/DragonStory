<?php
///
///<summary>
///The Model in the MVC Model  We're going controller -> model -> view
///The GameManager class will be the main engine of the application.  It will maintain track of the logged in user and will
///call a seperate connection class for all database communication.  The GameManager will maintain the status of the player
///The players name, location, rank, level, health, inventory, etc... The GameManager will then communicate with a seperate
///Dragon object for information about dragons to display for various occasions and reasons
///</summary>
///

/*
This is the model it should represent game data operations and rulesets.  It manages the behavior and data of the application,
responds to requests about it's application data and responds to instructions to change state.  This file governs all game data
and the rules applied to a users ability to update that data. This file will monitor the state of it's own data and govern the transformation
of all of that data.

This class will access the SQL database with a seperate Data Access Object probably $mysqli();

*/
class GameManager {
  //properties
  public $userid ;
  public $screenName ; //the Screen name of the currently logged in player



  //public methods



  public function registerNewUser($name, $password){
    require_once("classes/config.php");

    //We need to hash the password with PHP
    $password = password_hash($password, PASSWORD_DEFAULT);


    $mysqli = new mysqli($SQLserver, $SQLuser, $SQLpassword, $SQLdatabase);
    if($mysqli->connect_error) {
      exit('Error connecting to database'); //Should be a message a typical user could understand in production
    }

    $stmt = $mysqli->prepare("INSERT INTO users (email, password) values(?, ?)");
    $stmt->bind_param("ss", $name, $password);
    $stmt->execute();
    //fetching result would go here, but will be covered later
    $stmt->close();

    //redirect them to login.php
    //login.php should have the exact same form as index.php
    header('Location: login.php');

  }

  public function checkLogin($email, $password){
    //this function should check this cleaned information against the databse to see if the user exists.
    //if the user exists it should invoke the DisplayManager with a command to display the home screen with the current logged in user's id as a property.

    $displayManager = new DisplayManager();

    if ($email == null || $password == null){
      //there was some sort of error with their login information, return false
      echo "<br />No email or password was sent to the GameManager";
      return false ;
    }else{

      //check their login information in the sql database
      require_once("classes/config.php");
      $mysqli = new mysqli($SQLserver, $SQLuser, $SQLpassword, $SQLdatabase);
      if($mysqli->connect_error) {
        exit('Error connecting to database'); //Should be a message a typical user could understand in production
      }

      $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $result = $stmt->get_result();

        if($result->num_rows === 0){

          $displayManager->setError("Your email couldn't be found.");

          //redirect back to the engine
          header('Location: engine.php');
          exit();
        }
          while($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $names = $row['email'];
            $passHash = $row['password'];
        }

        if (password_verify($password, $passHash)){
          //the password is correct
          $_SESSION['userid'] = $id ;
          $displayManager->setError("You have logged in successfully");
          return true ;
        }else{
          //the password is incorrect

          $displayManager->setError("Your information was incorrect.");
          return false ;
        }

      $stmt->close();
    }

  }



  //private methods
  private function getUID(){
    if (isset($_SESSION['userid'])){
      $this->$userid = $_SESSION['userid'];
      return $this->$userid ;
    }else{
      return false ;
    }

  }




}
 ?>
