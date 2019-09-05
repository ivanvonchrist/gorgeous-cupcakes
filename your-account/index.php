<!DOCTYPE html>
<!-- include session_start to carry session, check if user session exists and if not redirect to login page -->
<?php
session_start();
if(!isset($_SESSION['user'])) {
    header('location:../login/');
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
            <?php
                //check if a user session exists and present them either with login link or account/logout link
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
        <!-- use the session variable user to display username on login -->
        <?php echo "<h1>Hello, " . $_SESSION['user'] . "!</h1>" ?>
        <p><a href="../add-product/">Add Products</a></p>
    </div>
    <div id="footer" class="flex-row">
        <ul>
            <li><a href="../../gorgeous-cupcakes/">Home</a></li>
            <li><a href="../shop">Shop</a></li>
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