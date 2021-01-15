### Log In Process
user sends login information from index.php or login.php

This information is sent by post to engine.php which then invokes the inputController to handle that input information.

engine.php should do three things, check to see if a user is logged in.

It will do this as long as $_SESSION['userid'] != null || 0

If a user is logged in and there is no input it displays the gamestate on the home page.
If a user is logged in and there is input it should pass that information to the InputController for cleaning.

if a user is not logged in and there is no input it should redirect to index.php
if a user is not logged in and there IS input, it should check to see if that input is login information.
  if yes pass the info to the inputController
  if no redirect to index.php
