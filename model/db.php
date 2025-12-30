<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "SDC342_Team_Project";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>