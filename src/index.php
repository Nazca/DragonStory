<?php session_start(); ?><!DOCTYPE html>
<html>
  <head>
    <title>Dragon Story Alpha 0.21</title>
    <!-- meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="UTF-8">
    <!-- end meta tags -->

    <!-- imported font -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet">


      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
      <!-- usage: font-family: 'Potta One', cursive; -->

    <!-- end imported font -->

    <!-- linking to jquery to make the dragon egg shake -->
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- end linking to jquery to make the dragon egg shake. -->

    <link rel="stylesheet" href="/css/style.css">



  </head>
  <body>
      <!-- body code here -->

        <nav>
          <div>
          <ul>
            <div class="navWrapper">
              <li><a href="index.php">Dragon Story</a></li>
              <li><a href="register.php">Register</a></li>
            </div>
          </ul>
          </div>
        </nav>

      <div class="wrapper">
        <h1 class="title">Dragon Story</h1>

        <div id="egg">
          <!-- an interactable egg -->
          <interactive>
            <img src="images/egg.png" alt="Dragon Egg" id="dragonEgg" class="toggle" onclick="document.getElementById('audio').play();">
            <!-- dragon egg jquery -->
              <script>
                $("#dragonEgg").click(function() {
                $( ".toggle" ).effect( "shake", { times:3 }, 500);
                });
              </script>
              <!-- end dragon egg jquery -->



              <!-- audio -->
                <audio id="audio">
                  <source src="sound/purring.mp3" />
                  You're browser does not support HTML5 - please update your browser.
                </audio>
              <!-- end audio -->


              <input type="submit" name="stopSound" value="Stop Sound" onclick="document.getElementById('audio').pause();" />
          </interactive>

        </div>

        <div id="content">
          <!-- text content -->
          <div class="login">
            <form action="includes/login.inc.php" method="POST" name="command" value="login">
              <input type="text" name="email" placeholder="Email..." /><br />
              <input type="password" name="password" placeholder="Password..."><br />
              <input type="submit" name="submit" value="Login" />
            </form>
            <form class="registerButton" action="register.php" method="POST" name="command" value="register">
              <input type="submit" name="register" value="Register" />
            </form>
          </div>

        </div>


      </div>
      <!-- end body code here -->

      <!-- begin footer code -->
      <div class="footer">
        <ul>
          <li>Coded and designed by <a href="https://my.indeed.com/p/johnn-1febyr7">John Newell<a></li>
        </ul>
      </div>

  </body>
</html>
