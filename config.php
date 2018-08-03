<?php
//no DB set up file as its automatic for online and offline settings
error_reporting(0);
$dbhost = "YourHost";
$dbname = "DBname";
$dbuser = "YourUsername";
$dbpass = "Pass";
  
         
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
?>