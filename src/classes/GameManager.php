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
This is the model is should represent game data operations and rulesets.  It manages the behavior and data of the application,
responds to requests about it's application data and responds to instructions to change state.  This file governs all game data
and the rules applied to a users ability to update that data. This file will monitor the state of it's own data and govern the transformation
of all of that data.

This class will access the SQL database with a seperate Data Access Object probably $mysqli();

*/
class GameManager {
  //properties
  public $user ; //the database id of the currently logged in user. 0 or null if no user is logged in.
  public $username; //String username to show what user is logged in;


  //get_class_methods

}
 ?>
