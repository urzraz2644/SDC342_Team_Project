<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "sdc342_team_project";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>