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
            <li><a href="../../gorgeous-cupcakes">Home</a></li>
            <li><a href="../shop">Shop</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#" class="alt-link"><i class="fas fa-shopping-cart"></i> (0)</a></li>
            <!-- check if a user session exists and present them either with login link or account/logout link -->
            <?php
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
        <h1>Update Product</h1>
        <?php
            //if redirected from submitting product update, echo success message
            //otherwise check if it was an error and display appropriate message based on the error number
            if(isset($_GET['success'])) {
                echo "<p>Product updated successfully.</p>";
            } elseif(isset($_GET['error'])) {
                $error = $_GET['error'];
                switch ($error) {
                    case 1:
                        echo "<p class=\"error\">There was a problem. Please ensure all fields are filled out.</p>";
                        break;
                    case 2:
                        echo "<p class=\"error\">There was a problem. Please ensure the product price is filled and is a numeric value.</p>";
                        break;
                }
            }

            //connect to the database
            require('../model/database.php');

            //select all products
            $sql = "SELECT * FROM gorgeous_cupcakes.products WHERE product_id='$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            //get the results
            $result = $stmt->fetchAll();
        
            //for the result, echo out the form with pre-filled values from the database
            foreach($result as $row):
            echo 
                "<form class=\"account-forms\" action=\"../model/update_product.php/?id={$row['product_id']}\" method=\"post\">
                <label>Product Name:</label><br>
                <input type=\"text\" value=\"{$row["product_name"]}\" name=\"productName\"><br>
                <label>Product Description:</label><br>
                <input type=\"text\" value=\"{$row["product_description"]}\"  name=\"productDescription\"><br>
                <label>Product Price ($):</label><br>
                <input type=\"text\" value=\"{$row["product_price"]}\"  name=\"productPrice\"><br>
                <label>Category:</label><br>
                <select name=\"category\">
                    <option value=\"1\">Sweet</option>
                    <option value=\"2\">Savoury</option>
                    <option value=\"3\">Special</option>
                </select><br>
                <input type=\"submit\" value=\"Update Product\"><br>
                <button class=\"alt-button\" type=\"button\" onclick=\"window.location='../../gorgeous-cupcakes/'\">Cancel</button>
                </form>";
            endforeach;
        ?>
    </div>
    <div id="footer" class="flex-row">
        <ul>
            <li><a href="../../gorgeous-cupcakes">Home</a></li>
            <li><a href="../login">Shop</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="../login">Login</a></li>
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