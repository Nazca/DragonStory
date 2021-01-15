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
  public function login($email, $password){
    //Lets gather user input, clean it, then send it to the game manager.
    $email = $this->clean($email);
    $password = $this->clean($password);

    //Notify the GameManager we want to log in with the information we have now cleaned

    //we notify the game manager by instantiating it here and calling a method for the command we want to run.
    //the method names should be the same from InputController to GameManager

    $GameManager = new GameManager();

    if ($GameManager->login($email, $password) == true){
      return true ;
    }else{
      return false ;
    }

  }




}
 ?>
