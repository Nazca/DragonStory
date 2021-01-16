<?php
///
///<summary>
///The Controller in the MVC Model  We're going controller -> model -> view
///The Controller Class accepts input from the user and converts it into commands for the GameManager
///</summary>
///
class InputController {
  //properties

  //The first type of input we are going to get is registration information.
  //Lets set some possible properties for user input from there.

  //methods

  //cleans user input making it SQL safe
  private function clean($input){
    //clean some sort of input from the users
    return $input ;
  }
  //we need a method that allows us to communicate with the GameManager class
  public function login(){
    if (isset($_GET['login'])){

      //instead of just setting the $_SESSION['userid'] to 1 (the first user) we need to request a login from the game manager which will then access the database for us.
      //$_SESSION['userid'] = 1 ;

      //we need to redirect to engine.php so that we will display updated information.
      //at this point in time engine.php is displaying debug information as coding has not begun for the DisplayManager
      //otherwise the display manager would be invoked to display the gamestate.
      header("Location: engine.php");
      return true ;
    }else{
      echo "failed to log in a user.";
      return false ;
    }
  }

  public function logout(){
    if (isset($_GET['logout']) && $_GET['logout'] == "true"){
      $_SESSION['userid'] = 0 ;
      unset($_SESSION['userid']);

      //we need to redirect to index.php since they are now logged out.
      header("Location: index.php");
      return true ;
    }else{
      return false ;
    }
  }




}
 ?>
