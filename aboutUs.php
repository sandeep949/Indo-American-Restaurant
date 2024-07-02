<!DOCTYPE html>
<html>

<head>
    <title>Indo American Restaurant - AboutUs</title>
    <link rel="stylesheet" href="style.css"><!-- linking external stylesheet -->
    <meta charset="UTF-8"><!-- setting character encoding to UTF-8 -->
    
</head>

<body>
    <header>
        <h1><i>Indo American Restaurant</i></h1><!-- adding restaurant name in italics -->
        <h2><b>Welcome to our restaurant!</b></h2><!-- adding welcome message in bold -->
        <?php include 'menubar.php'; ?><!-- including PHP code to dynamically generate menu bar -->
    </header>
    <main>
        <?php

        echo '<h1>About US</h1>';


        ?>
        <form method="post">
    <label for="names">Our Contributions towards the Project:</label>
    <select name="names" id="names">
        <option value="sandeep">Sandeep</option>
        <option value="rahul">Rahul</option>
        <option value="reddy">Reddy</option>
        <option value="sai">Sai</option>
    </select>
    <br><br>
    <input type="submit" value="Submit" style ="background-color: purple;">
</form>

<?php
// Display corresponding text based on the selected name
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selected_name = $_POST['names'];

    switch ($selected_name) {
        case 'sandeep':
            echo "<p>  Hello, I'm Sandeep!! <br> I have created Review and About Us page in this website</p>";
            break;
        case 'rahul':
            echo "<p>Hey Guys! This is Rahul <br> I've created Orders and Catering Page!</p>";
            break;
        case 'reddy':
            echo "<p>Greetings, I'm Pratap! <br> I created Deals page.....</p>";
            break;
        case 'sai':
            echo "<p>Hey, I'm Sai! <br> I created Home and Menu page </p>";
            break;
        default:
            echo "<p>Please select a name from the dropdown.</p>";
            break;
    }
}
?>
    </main>
</body>

</html>