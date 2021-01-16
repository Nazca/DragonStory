<?php
//config file for application settings such as sql server connection information

//NOTE:The following code tests to see if we are on localhost and changes the values depending
$whitelist = array(
    '127.0.0.1',
    '::1'
);

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
  //live
  $SQLserver = "localhost" ;
  $SQLuser = "Nazca" ;
  $SQLpassword = "LedG1090####";
  $SQLdatabase = "dragonstory";
}else{
  //localhost
  $SQLserver = "localhost" ;
  $SQLuser = "root" ;
  $SQLpassword = "nhojjohn#";
  $SQLdatabase = "dragonstory";
}
