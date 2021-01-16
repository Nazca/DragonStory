<?php
///
///<summary>
///The View in the MVC Model  We're going controller -> model -> view
///The Display Manager accepts commands from the GameManager to set variables and game display options.
///</summary>
///

/*
This Display Manager governs the visualization of the data thatis passed to it by the Model class GameManager.
*/
class DisplayManager {
  //properties
  private $error ;


  //public methods
  public function displayHome(){
    $userManager = new UserManager();

    if ($userManager->userLoggedIn() === true){
      //we are logged in.
      echo "We are logged in. UID:"  . $_SESSION['userid'];
      echo "<br /><a href=\"engine.php?logout=true\">Logout</a>";
      echo "<br /><a href=\"engine.php\">Engine</a>";
      ?>

      <!--this is placeholder html for gamestate view -->
      <html>
        <body>
          <center>
            <br /><br /><br />
            <h3>Dragon Story</h3>
            <p>
              This page is still under construction.  Don't worry we have your email and will email you when things heat up a little bit.  You can press the blue log out button to log out and the blue engine button to simulate an engine action.
            </p>
          </center>
        </body>
      </html>




      <?php
    }else{
      header('Location: ../login.php');
    }
  }

  public function setError($text){
    $_SESSION['error'] = $text ;
  }


  public function displayError(){
    if (isset($_SESSION['error'])){
        echo "<p><font color=red>" . $_SESSION['error'] . "</font></p>";
        $_SESSION['error'] = null ;
        unset($_SESSION['error']);
    }

  }

}
 ?>
