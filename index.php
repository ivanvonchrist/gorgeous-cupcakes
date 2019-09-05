<!DOCTYPE html>
<!-- include session_start to carry session -->
<?php
session_start();
?>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <title>Gorgeous Cupcakes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/anicollection.css">
    <link rel="stylesheet" href="https://use.typekit.net/soa4xun.css">
    <script src="https://kit.fontawesome.com/55c4df76c1.js"></script>
    
</head>
<body>
    <div id="logo">
        <h1>Gorgeous Cupcakes</h1>
    </div>
    <div id="nav">
        <ul>
            <li><a href="../../gorgeous-cupcakes">Home</a></li>
            <li><a href="shop">Shop</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#" class="alt-link"><i class="fas fa-shopping-cart"></i> (0)</a></li>
            
            <?php
                // check if a user session exists and present them either with login link or account/logout link
                if(!isset($_SESSION['user'])) {
                    echo "<li><a href=\"login\" class=\"alt-link\">Login</a></li>";
                } else {
                    echo "<li><a href=\"your-account\">Your Account</a></li>";
                    echo "<li><a href=\"logout\" class=\"alt-link\">Logout</a></li>";
                }
                ?>
        </ul>
    </div>
    <div id="hero" class="flex">
        <div id="hero-content">
            <p>Beautiful hand-made cupcakes, perfect for any occassion.</p>
            <button onclick="window.location='shop'">Shop Now</button>
        </div>
    </div>
    <div class="content">
        <h1>Tasty New Products!</h1>
        <div class="item-flex">
            <?php

            //connect to the database
            require('model/database.php');
            
            //select a couple of products to display
            $sql = "SELECT * FROM gorgeous_cupcakes.products LIMIT 2";
            $statement = $conn->prepare($sql);
            $statement->execute();
            
            //get the results
            $result = $statement->fetchAll();
            
            //for each result echo out product information into an item
            foreach($result as $row):
                echo "<div class=\"item\">";
                echo "<img src=\"images/cupcake.png\" alt=\"A beautiful cupcake\">";
                echo "<h1>{$row['product_name']}</h1>";
                echo "<p>{$row['product_description']}</p>";
                $priceformat = number_format($row['product_price'], 2);
                echo "<p>$"."$priceformat</p>";
                echo "<button class=\"end\">Add to Cart</button>";
                if(isset($_SESSION['user'])) {
                echo "<br><p>";
                echo "<a href=\"update-product/?id={$row['product_id']}\">Update </a>";
                echo "<a class=\"delete-link\" href=\"delete-product/?id={$row['product_id']}\">Delete</a></p>";
                }
                echo "</div>";
            endforeach;
               
            ?>
        </div>
    </div>
    <div id="footer" class="flex-row">
        <ul>
            <li><a href="../gorgeous-cupcakes">Home</a></li>
            <li><a href="shop/">Shop</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="login">Login</a></li>
        </ul>
        <p>&copy; <?php echo date("Y"); ?> Gorgeous Cupcakes</p>
        <ul>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
        </ul>
    </div>
</body>
</html>