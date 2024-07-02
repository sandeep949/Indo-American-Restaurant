<!DOCTYPE html>
<html>

<head>
    <title>Indo American Restaurant - Orders</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">

</head>

<body>
    <header>
        <h1><i>Indo American Restaurant </i></h1>
        <h2><b>Welcome to our restaurant!</b></h2>
        <?php include 'menubar.php'; ?><!-- include navigation bar from external file -->
    </header>
    <h2>Order Confirmation</h2>
    <main>
        <p>Thank you for considering Indo American Restaurant for your catering needs. Please fill out the form below and we will get back to you as soon as possible.</p>
        <form method="post" action="orders.php"><!-- form to capture user input -->
            <table>
                <tr>><td>NAME</td>
                    <td><input type="text" name="name" value="
            <?php
            if (isset($_POST['submitButton'])) {
                echo $_POST['name'];
            } ?>" /></td>
                </tr>
                <tr>><td>EMAIL</td>
                    <td><input type="email" name="email" value="
            <?php
            if (isset($_POST['submitButton'])) {
                echo $_POST['email'];
            } ?>" /></td>
                </tr>
                <tr>><td>PHONE NUMBER</td>
                    <td><input type="text" name="phone" value="
            <?php
            if (isset($_POST['submitButton'])) {
                echo $_POST['phone'];
            } ?>" /></td>
                </tr>
                <tr>><td>Delivery Address</td>
                    <td><input type="text" name="delivery_address" value="
            <?php
            if (isset($_POST['submitButton'])) {
                echo $_POST['delivery_address'];
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
        
        if(isset($_POST["submitButton"])) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $delivery_address = trim($_POST['delivery_address']);
        
            if(empty($name) || empty($email) || empty($phone) || empty($delivery_address)) {
                echo("<b><p style='color:red'>Please Enter All Details</p></b>");
            }
            elseif(!preg_match('/^[0-9]{10}$/', $phone)) {
                echo("<b><p style='color:red'>Please Enter a Valid 10-digit Phone Number</p></b>");
            }
            else {
                include("OrderConfirmation.php");
                echo("<b><p style='color:green'>Your Order has been placed successfully!!!</p></b>");
            }
        }
        
        
        ?>
    </main>
</body>
</html>