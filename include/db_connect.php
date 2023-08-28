<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "wedding";
$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn){
    die("Failed to connect to database due to this error -> ". mysqli_connect_error());
}

?>