<?php
//database variables
    $host = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'stormbreakers';
    
    //create connection
     
 $con = mysqli_connect("$host", "$dbusername", "$dbpassword", "$dbname"); 
 if (mysqli_connect_error()) { 
   die("Error connecting: " . mysqli_connect_errno() . ' ' . mysqli_connect_error() . "\n"); 
 } 
?>