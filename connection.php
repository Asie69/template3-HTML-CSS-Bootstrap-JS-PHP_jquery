<?php

$serverName = "localhost";
$usernameDB = "root";
$passDB = "";
$DBName = "template1-final";

$conn = mysqli_connect($serverName,$usernameDB,$passDB,$DBName);

if(!$conn){
    die('err db:' . mysqli_connect_error());
}

 
