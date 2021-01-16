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
  private function clean($input){
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
      $gameManager->checkLogin($email, $password) ;

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

  public function register(){
    //we want to register the user
    //$_POST['email'] email2, password and password2 should be set.
    $email = $_POST['email'] ;
    $password = $_POST['password'] ;

    //first lets check that the emails and password are the same thing

    if ($email == $_POST['email2'] && $password = $_POST['password2']){
      //the user input the same values as email and password

      //clean the input and invoke the game manager to add them to the database
      $email = $this->clean($email);
      $password = $this->clean($password);


      //invoke the game manager to register a new users
      $gameManager = new GameManager() ;
      $gameManager->registerNewUser($email, $password);

    }else{
      //invoke the displaymanager to display this message
      $displayManager = new DisplayManager();
      $displayManager->setError("The user input was not the same."); //the display manager is not invoked by engine.php
      $displayManager->displayError();
      //we should end up at engine.php with a red error text

    }

  }




}
 ?>
