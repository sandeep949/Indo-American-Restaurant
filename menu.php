
<!DOCTYPE html>
<html>

<head>
    <title>Indo American Restaurant  - Menu</title>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        /* CSS styling for the product card */
        .card {
            background-color: whitesmoke;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: left;
            font-family: arial;
            color: black;
        }

        /* CSS styling for the card image */
        .card img {
            width: 100%;
            height: 100%;
        }

        /* CSS styling for heading 3 */
        h3 {
            text-align: center;
        }

        /* CSS styling for price class */
        .price {

            font-size: 22px;
            text-align: center;
            color: black;
        }

        /* CSS styling for section class */
        .section {
            display: flex;
        }
    </style>

    <!-- Including JavaScript file for menu functionality -->
    <script type="text/javascript" src="menu.js"></script>
</head>

<body>
    <header>
        <!-- Header section which includes navbar -->
        <h1><i>Indo American Restaurant </i></h1>
        <h2><b>Welcome to our restaurant!</b></h2>
        <?php include 'menubar.php'; ?>
    </header>

    <!-- Heading for product card -->
    <h2 style="text-align:center">Product Card</h2>

    <!-- Main section -->
    <main>
        <!-- Biryanis section -->
        <h2>Biryanis</h2>
        <div class="section">
            <!-- Card for chicken biryani -->
            <div class="card">
                <img src="Images/ChickenBiryani.jpeg">
                <h3>Chicken Biryani</h3>
                <p class="price">$10.99</p>
                <p>Enter the quantity to be ordered: </p>
                <input type="number" id="quantityChicken" name="chicken-biryani" min="0" value="0" data-price="10.99"><br>
            </div>

            <!-- Card for lamb biryani -->
            <div class="card">
                <img src="Images/lamb-Biryani.jpeg">
                <h3>Lamb Biryani</h3>
                <p class="price">$12.99</p>
                <input type="number" id="quantityLamb" name="Lamb-biryani" min="0" value="0" data-price="12.99"><br>
            </div>
        </div>

        <!-- Curries section -->
        <h2>Curries</h2>
        <div class="section">
            <!-- Card for paneer butter masala -->
            <div class="card">
                <img src="Images/paneer-butter-masala.jpeg">
                <h3>Paneer Butter Masala</h3>
                <p class="price">$10.99</p>
                <p>Enter the quantity to be ordered: </p>
                <input type="number" id="quantityPaneer" name="paneerbuttermasala" min="0" value="0" data-price="10.99"><br>
            </div>

            <!-- Card for malai kofta -->
            <div class="card">
                <img src="Images/Malai-kofta.jpeg">
                <h3>Malai Kofta</h3>
                <p class="price">$12.99</p>
                <p>Enter the quantity to be ordered: </p>
                <input type="number" id="quantityMalai" name="malaikofta" min="0" value="0" data-price="10.99"><br>
            </div>
        </div>
        <!-- Desserts section -->
        <h2>Desserts</h2>
        <div class="section">
            <!-- Card for falooda -->
            <div class="card">
                <img src="Images/Falooda.jpeg">
                <h3>Falooda</h3>
                <p class="price">$12.99</p>
                <p>Enter the quantity to be ordered: </p>
                <input type="number" id="quantityFalooda" name="falooda" min="0" value="0" data-price="10.99"><br>
            </div>
        </div>
        <!--button section-->
        <input type="submit" id="cartButton" value="Add to Cart">
        <p id="totalPrice"></p>
        <input type="button" id="dealsButton" value="Check Deals">
</body>

</html>