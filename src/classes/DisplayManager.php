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


    if (isset($_GET['number'])){
      $number = $_GET['number'] ;

    }else{
      $number = 0 ;

    }



    if ($userManager->userLoggedIn() === true){
      //we are logged in.
      echo "We are logged in. UID:"  . $_SESSION['userid'];
      echo "<br /><a href=\"engine.php?logout=true\">Logout</a>";
      echo "<br /><a href=\"engine.php?number=" . $number + 1 . "\">Engine</a>";

      ?>

      <!--this is placeholder html for gamestate view -->
      <html>
        <body>
          <center>
            <br /><br /><br />
            <h3>Dragon Story</h3>

            <p><?php if ($number % 100 == 0 && $number > 9){ echo "<font color=blue>";}else{echo "<font>";} ; if (isset($number) && $number > 9){ echo $number ;}?></font></p>
            <p>
              This page is still under construction.  Don't worry we have your email and will email you when things heat up a little bit.<br />
              You can press the blue log out button to log out and the blue engine button to simulate an engine action.
            </p>
            <img src="../images/cartoon_eggs.jpg" />
          </center>
        </body>
      </html>
      <!-- End placeholder html for gamestate view -->
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
