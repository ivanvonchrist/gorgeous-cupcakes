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
            <li><a href="../../gorgeous-cupcakes/">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#" class="alt-link"><i class="fas fa-shopping-cart"></i> (0)</a></li>
            <li class="your-account"><a href="../your-account/">Your Account</a></li>
            <li><a href="../logout/" class="alt-link">Logout</a></li>
        </ul>
    </div>
    <div class="content flex">
        <?php echo "<h1>Hello, " . $_SESSION['user'] . "!</h1>" ?>
    </div>
    <div id="footer" class="flex-row">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Login</a></li>
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