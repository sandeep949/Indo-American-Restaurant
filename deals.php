<!DOCTYPE html>
<html>

<head>
    <title>Indo American Restaurant  - Deals</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <script type="text/javascript" src="deals.js">
    </script>
</head>

<body>
    <header>
        <h1><i>Indo American Restaurant </i></h1>
        <h2><b>Welcome to our restaurant!</b></h2>
        <?php include 'menubar.php'; ?>
    </header>
    <main>
        <?php
        $totalprice = $_GET["totalprice"];
        echo "<h1>Deals..</h1>

         <p>
            <label for = 'amountTextBox'>Enter the total amount : </label>
            <input type ='text' id= 'amounttext' value=$totalprice>
            <input type ='button' value ='Submit' id= 'totalAmount'>
            <p id = 'resultPara'></p>
         </p>";
        echo '<input type ="button" value ="Order Now" id= "orderButton">';
        echo "<script src='deals.js'></script>";
        ?>
    </main>
</body>

</html>