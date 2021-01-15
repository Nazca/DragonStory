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





  //get_class_methods
  //we need a method that allows us to communicate with the GameManager class
  function login($email, $password, $screenName){
    //Lets gather user input, clean it, then send it to the game manager.
    $email = clean($email);
    $password = clean($password);
    $screenName = clean($screenName);

    //Notify the GameManager we want to log in with the information we have now cleaned

  }


  //cleans user input making it SQL safe
  function clean($input){
    //clean some sort of input from the users
    return $input ;
  }

}
 ?>
