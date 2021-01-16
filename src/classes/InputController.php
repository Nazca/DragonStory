<?php
///
///<summary>
///The Controller in the MVC Model  We're going controller -> model -> view
///The Controller Class accepts input from the user and converts it into commands for the GameManager
///</summary>
///
class InputController {
  //properties
  //private properties
  private $email;
  private $password;

  //public properties

  //The first type of input we are going to get is registration information.
  //Lets set some possible properties for user input from there.

  //methods

  //cleans user input making it SQL safe
  public function clean($input){
    //clean some sort of input from the users
    return $input ;
  }
  //we need a method that allows us to communicate with the GameManager class
  public function login(){
    if (isset($_GET['login'])){

      $email = $this->clean($_POST['email']);
      $password = $this->clean($_POST['password']);
      //The fact that get=login is set means we are attempting to log in from index.php
      //we should clean the input, invoke the game manager to access the database
      $gameManager = new GameManager() ;
      if ($gameManager->checkLogin($email, $password) === true){
        header('Location: engine.php');

      }

      return true ;
    }else{
      echo "Failed to log in a user.";
      return false ;
    }
  }

  public function logout(){

      $_SESSION['userid'] = 0 ;
      unset($_SESSION['userid']);

      //we need to redirect to index.php since they are now logged out.
      header("Location: index.php");
      return true ;

  }




}
 ?>
