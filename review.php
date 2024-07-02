<!DOCTYPE html>
<html>

<head>
    <title>Indo American Restaurant  - Review</title>
    <!-- The following line is a link to the CSS stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- The following line is a link to the JavaScript file -->
    <script type="text/javascript" src="review.js"></script>
</head>

<body>
    <!-- The following lines create the header of the page -->
    <header>
        <h1><i>Indo American Restaurant </i></h1>
        <h2><b>Welcome to our restaurant!</b></h2>
        <?php include 'menubar.php'; ?>
    </header>
    <!-- The following lines create the form for submitting a review -->
    <h1>Submit a Review</h1>
    <form action="review.php" method="post">
        <p>
            <label for="nameBox">Name: </label>
            <input type="text" id="nameBox">
        </p>
        <p>
            <label for="emailBox">Email address: </label>
            <input type="email" id="emailBox">
        </p>
        <p>
            <label for="contactBox">Contact: </label>
            <input type="text" id="contactBox">
        </p>
        <p>
            <label for="messageBox">Message: </label>
            <input type="text" id="messageBox">
        </p>

    </form>
    <!-- The following line creates a button to submit the review -->
    <input type="button" id="submitButton" value="Submit" style = "background-color:purple;color:white;">
    <!-- The following line creates a paragraph to display the result of the review submission -->
    <p id="resultPara"></p>


</body>

</html>