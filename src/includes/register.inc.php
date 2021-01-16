<?php
require_once 'functions.inc.php' ;

//this page should have a post from ../register.php

register($_POST['email'], $_POST['password']);
