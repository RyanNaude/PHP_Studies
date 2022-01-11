<?php
//Database connection code
$sqlHost = "localhost:3307";
$sqlUser = "root";
$sqlPass = "";
$sqlDB = "loginapp";

$connection = mysqli_connect($sqlHost, $sqlUser,  $sqlPass,  $sqlDB);
// $mysqli = new mysqli($sqlHost, $sqlUser,  $sqlPass,  $sqlDB);

if (!$connection) {
    die("Database connection failed");
}
