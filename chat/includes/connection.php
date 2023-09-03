<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "socialnet";

if(!$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("Failed to connect to database");
}

