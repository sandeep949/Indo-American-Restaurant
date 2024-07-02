<?php
//global variables for creating connection.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "catering";

$result; // stores the result of the query.

// build SELECT query --step2
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$delivery_address = $_POST["delivery_address"];

//Build Query
$sql = "INSERT INTO orders(name,email,phone,delivery_address)VALUES ('$name','$email','$phone','$delivery_address')";

//connect to MySQL- step3
//Create connection and connect to database:

$connection = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connection->errno) {
  ("connection failed: " . $connection->connect_error); // if connection fails, display error message.
  echo "DBMS Connect failed - errno:" . $connection->errno . PHP_EOL;
  die("DBMS Connect failed-error:") . $connection->error . PHP_EOL;
} // end if
try {
  if ($connection->query($sql)) { // send the sql insert query --step4

    //echo "Congratulations!! Your order is placed.";

    $_POST[] = array();
    //header("Location: orders.php");
  } else {
    //die
    throw new Exception("Insert Failed" . $connection->error);
  }
} catch (Exception $e) {
  die("Error:" . $e->getMessage()); // error handling

} // end try catch.*/
$connection->close(); //step5
unset($_POST['insert']);
