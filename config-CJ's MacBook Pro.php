<?php
if(!isset($_SESSION)) {
        session_start();
    }
$host = "localhost"; //Creating the variable for the host
$username ="ecm1417"; //Creating the username root
$password = "WebDev2021"; //Creating the variable for the password
$dbName = "webdev"; //Creating the variable for the database name

$conn =  mysqli_connect($host, $username, $password, $dbName); //Connecting to the database


if(!$conn) {
    die ("Connection error: ".mysqli_connect_error());
}

