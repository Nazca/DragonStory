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



  //get_class_methods

  private function getUID(){
    if (isset($_SESSION['userid'])){
      $this->$userid = $_SESSION['userid'];
    }

  }

  public function login($email, $password){
    //this function should check this cleaned information against the databse to see if the user exists.
    //if the user exists it should invoke the DisplayManager with a command to display the home screen with the current logged in user's id as a property.

    if ($email == null || $password == null){
      //there was some sort of error with their login information, return false
      echo "<br />No email or password was sent to the GameManager";
      return false ;
    }else{
      //check their login information in the sql database
      //check code

      //basic code to set a userid in the session
      //beware this makes every one me
      $this->userid = 1 ;
      $_SESSION['userid'] = 1 ;

      return true;
    }

  }

  private function home(){
    //display the home screen for the player with user id $_SESSION['userid'];
  }

}
 ?>
