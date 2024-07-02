<!DOCTYPE html>
<html>

<head>
    <!-- This is the title of the page -->
    <title>Indo American Restaurant  - Catering</title>
    <!-- This is a link to an external stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <!-- This is the main heading of the page -->
        <h1><i>Indo American Restaurant </i></h1>
        <!-- This is the main heading of the page -->
        <h2><b>Welcome to our restaurant!</b></h2>
        <!-- This includes a PHP file that generates a menu bar for the page -->
        <?php include 'menubar.php'; ?>

    </header>

    <main>
        <!-- This is a subheading for the catering section of the page -->
        <h2>Catering</h2>
        <!-- This is a paragraph of text that introduces the catering form -->
        <p>Thank you for considering Indo American Restaurant for your catering needs. Please fill out the form below and we will get back to you as soon as possible.</p>
        <!-- This is a form for submitting catering information, with various input fields -->
        <form method="post" action="Catering.php">
            <table>
                <tr>><td>NAME</td>
                    <!-- This is an input field for the user's name -->
                    <td><input type="text" name="name" value="
            <?php
            // This sets the value of the input field to the user's previous input, if any
            if (isset($_POST['submit'])) {
                echo $_POST['name'];
            } ?>" /></td>
                </tr>
                <tr>><td>EMAIL</td>
                    <td><input type="email" name="email" value="
            <?php
            // This sets the value of the input field to the user's previous input, if any
            if (isset($_POST['submit'])) {
                echo $_POST['email'];
            } ?>" /></td>
                </tr>
                <tr>><td>PHONE NUMBER</td>
                    <td><input type="text" name="phone" value="
            <?php
            // This sets the value of the input field to the user's previous input, if any
            if (isset($_POST['submit'])) {
                echo $_POST['phone'];
            } ?>" /></td>
                </tr>
                <tr>><td>Event Type</td>
                    <td><input type="text" name="event_type" value="
            <?php
            // This sets the value of the input field to the user's previous input, if any
            if (isset($_POST['submit'])) {
                echo $_POST['event_type'];
            } ?>" /></td>
                </tr>
                <tr>
                    <td>Event Date</td>
                    <td><input type="date" name="event_date" value="
            <?php
            // This sets the value of the input field to the user's previous input, if any
            if (isset($_POST['submit'])) {
                echo $_POST['event_date'];
            } ?>" /></td>
                </tr>
                <tr>
                    <td>Event Time</td>
                    <td><input type="time" name="event_time" value="
            <?php
            // This sets the value of the input field to the user's previous input, if any
            if (isset($_POST['submit'])) {
                echo $_POST['event_time'];
            } ?>" /></td>
                </tr>
                <tr>
                    <td>Number of Guests</td>
                    <td><input type="text" name="guests" value="
            <?php
            // This sets the value of the input field to the user's previous input, if any
            if (isset($_POST['submit'])) {
                echo $_POST['guests'];
            } ?>" /></td>
                </tr>
                <tr>
                    <td>Additional Information</td>
                    <td><input type="text" name="additional_info" value="
            <?php
            // This sets the value of the input field to the user's previous input, if any
            if (isset($_POST['submit'])) {
                echo $_POST['additional_info'];
            } ?>" /></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:centre">
                        <input type="submit" value="Submit" name="submitButton">
                    </td>
                <tr>
            </table>
        </form>

        <?php

        if (isset($_POST["submitButton"])) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $event_type = trim($_POST['event_type']);
            $event_date = trim($_POST['event_date']);
            $event_time = trim($_POST['event_time']);
            $guests = trim($_POST['guests']);
            $additional_info = trim($_POST['additional_info']);

            if (empty($name) || empty($email) || empty($phone) || empty($event_type) || empty($event_date) || empty($event_time) || empty($guests) || empty($additional_info)) {
                echo ("<b><p style='color:red'>Please Enter All Details</p></b>");
            } elseif ($guests > 100) {
                echo ("<b><p style='color:red'>Number of guests cannot exceed 100</p></b>");
            } elseif (!preg_match('/^[0-9]{10}$/', $phone)) {
                echo ("<b><p style='color:red'>Please Enter a Valid Phone Number (10 digits only)</p></b>");
            } else {
                include("CateringDatabase.php");
            }
        }


        ?>



    </main>
</body>