<!DOCTYPE html>
<!-- include session_start to carry session, check if user session exists and if not redirect to login page
if user session exists, get the id from the URL -->
<?php
session_start();
if(!isset($_SESSION['user'])) {
    header('location:../login/');
} else {
    $id = $_GET['id'];
}
?>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <title>Gorgeous Cupcakes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/anicollection.css">
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
            <li><a href="../shop">Shop</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#" class="alt-link"><i class="fas fa-shopping-cart"></i> (0)</a></li>
            <?php
            
                // check if a user session exists and present them either with login link or account/logout link
                if(!isset($_SESSION['user'])) {
                    echo "<li><a href=\"../login\" class=\"alt-link\">Login</a></li>";
                } else {
                    echo "<li><a href=\"../your-account\">Your Account</a></li>";
                    echo "<li><a href=\"../logout\" class=\"alt-link\">Logout</a></li>";
                }
            ?>
        </ul>
    </div>
    <div class="content flex">
        <h1>Delete Product</h1>
        <?php

        //connect to the database
        require('../model/database.php');

        //select the product
        $sql = "SELECT product_name FROM gorgeous_cupcakes.products WHERE product_id='$id'";
        $result = $conn->query($sql);
        $productName = $result->fetchColumn();
        
        //checks if success is in the url, and echos a message to tell the user
        //else checks if a row exists to even delete in the first instance
        //otherwise echos a message that the product does not exist
        //this is probably not a good chunk of code now im looking at it
        if(isset($_GET['success'])) {
            echo
                "<p>Product deleted successfully.</p>
                <form class=\"account-forms\"><button class=\"alt-button\" type=\"button\" onclick=\"window.location='../../gorgeous-cupcakes/'\">Back Home</button></form>";
        } elseif($result->rowCount() > 0) {
            echo 
            "<p>Do you wish to delete $productName? This action cannot be undone.</p>
            <form class=\"account-forms\" action=\"../model/delete_product.php/?id=$id\" method=\"post\">
            <input type=\"submit\" value=\"Delete Product\"><br>
            <button class=\"alt-button\" type=\"button\" onclick=\"window.location='../../gorgeous-cupcakes/'\">Cancel</button>
            </form>";
        } else {
            echo
            "<p>No product could be found.</p>
            <form class=\"account-forms\"><button type=\"button\" onclick=\"window.location='../../gorgeous-cupcakes/'\">Back Home</button></form>";
        }
        ?>
    </div>
    <div id="footer" class="flex-row">
        <ul>
            <li><a href="../../gorgeous-cupcakes">Home</a></li>
            <li><a href="../shop">Shop</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="../shop">Login</a></li>
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