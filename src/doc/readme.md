[Dragon Story homepage](https://dragonstory.hamfingered.com/) | [Documentation
table of contents](TOC.md)

# The Process

The code used on the live production server is the code stored on the main branch at https://github.com/Nazca/DragonStory.git

This code is what should be on the live server. It is available to pull to godaddy hosting with the git version control tool.  FTP access is not needed.


## Editing the code.

Create a branch of the main fork of Dragon Story and name it the name of the developer coding in that branch. Mine will be named "John"

Edit that branch as use the godaddy interface to pull it to alpha.dragonstory.hamfingerd.com test your changes there in the production environment.

If no problems are found create a pull request for the main branch to merge your code.  Once the code is merged immediately pull the main branch to
the production environment using the git version control tool on godaddy.

### The src folder
The 'src' folder holds all the custom code.  Most of the files are for git or html5 boilerplate.  Inside the source folder the webserver instantiates
index.php for the user.

Index.php should not expect the user to be in a specific log in state and should display information dynamically to users.

From index.php or login.php we can send information to the controller by calling engine.php which will accept user input, clean it with the
input controller instantiate the model or the GameManager which will call the DisplayManager to dynamically display information to the user.f

### engine.php

engine.php is the page thats called when a user sends Input

### InputController.php

engine.php will instantiate InputController.php class to clean the user input.

### GameManager.php

GameManager will accept commands from the InputController, modify it's game state save it's state to the database then instantiate the view or the
DisplayManager.php class to dynamically display the gamestate to the user.

### DisplayManager.php

DisplayManager.php takes commands from GameManager to display the current game state to the user.
