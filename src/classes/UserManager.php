<?php
/*<summary>
///This class manages the currently logged in user.
</summary>*/
class UserManager {
  //properties
  private $loggedIn; //a bool set true if a user is logged in and false if the user isn't logged in

  //methods
  public function userLoggedIn() {
    //this function checks the current logged in state of the user and should return true of the user is logged in, false if the user is logged out.
    //we can check to see if the user is currently logged in by checking to see if $_SESSION['userid'] has a userid in it.

    if (isset($_SESSION['userid'])){
      return true ;
    }else{
      return false ;
    }
  }

  public function userLogOut() {
    //we want to log the user out.
    //return true if successful and false if not

    if (isset($_SESSION['userid']) && $_SESSION['userid'] > 0){
      //we treat session userid 0 as no logged in use
      return true ;
    }else{
      return false ;
    }

  }

}
?>
