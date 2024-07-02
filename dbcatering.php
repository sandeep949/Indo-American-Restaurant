<?php

//global variables for creating connection.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "catering"; // stores the result of the query.

$result;

//Create connection and connect to database:
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->errno) {
    ("connection failed: " . $connection->connect_error); // if connection fails, display error message.
    echo "DBMS Connect failed - errno:" . $connection->errno . PHP_EOL;
    die("DBMS Connect failed-error:") . $connection->error . PHP_EOL;
} 