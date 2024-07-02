<?php
include('dbcatering.php');
// store

// build SELECT query --step2
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$event_type = $_POST["event_type"];
$event_date = $_POST["event_date"];
$event_time = $_POST["event_time"];
$guests = $_POST["guests"];
$additional_info = $_POST["additional_info"];

//Build Query
$sql = "INSERT INTO catering (name,email,phone,event_type,event_date,event_time,guests,additional_info)VALUES ('$name','$email','$phone','$event_type', '$event_date', '$event_time', '$guests','$additional_info')";

//connect to MySQL- step3
// Check connection
try {
    if ($connection->query($sql)) { // send the sql insert query --step4
        echo "Thank you for filling the form, We will get back to you soon";
        $_POST[] = array();
    } else {
        //die
        throw new Exception("Insert Failed" . $connection->$error);
    }
} catch (Exception $e) {
    die("Error:" . $e->getMessage()); // error handling

} // end try catch.*/
$connection->close(); //step5
unset($_POST['insert']);
