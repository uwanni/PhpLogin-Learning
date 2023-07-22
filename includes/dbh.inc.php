<?php
$serverName = "localhost";
$dbUserName = "upekshaw";
$dbPassword = "(orNOLq.mpfUnnl.";
$dbName = "World_of_Tech_Login";

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed : " .mysqli_connect_error());
} 