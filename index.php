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
            <li><a href="../../gorgeous-cupcakes/">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#" class="alt-link"><i class="fas fa-shopping-cart"></i> (0)</a></li>
            <li><a href="login/" class="alt-link">Login</a></li>
        </ul>
    </div>
    <div id="hero" class="flex">
        <div id="hero-content">
            <p>Beautiful hand-made cupcakes, perfect for any occassion.</p>
            <button>Shop Now</a></button>
        </div>
    </div>
    <div class="content">
        <h1>Tasty New Products!</h1>
        <div class="item-flex">
            <?php

            //connect to the database
            require('model/conn.php');
            
            //select all products
            $sql = "SELECT * FROM gorgeous_cupcakes.products";
            
            //get the results
            $result = $conn->query($sql);
            
            //for each result echo out product information into an item
            foreach($result as $row):
                echo "<div class=\"item\">";
                echo "<img src=\"images/cupcake.png\" alt=\"A beautiful cupcake\">";
                echo "<h1>{$row['product_name']}</h1>";
                echo "<p>{$row['product_description']}</p>";
                $priceformat = number_format($row['product_price'], 2);
                echo "<p>$"."$priceformat</p>";
                echo "<button class=\"end\">Add to Cart</button>";
                echo "</div>";
            endforeach;
               
            ?>
        </div>
    </div>
    <div id="footer" class="flex-row">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="contact.html">Login</a></li>
        </ul>
        <p>&copy; <?php echo date("Y"); ?> Gorgeous Cupcakes</p>
        <ul>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
        </ul>
    </div>
    <script src="https://anijs.github.io/lib/anijs/anijs-min.js"></script>
</body>
</html>