<!DOCTYPE html>
<!-- include session_start to carry session, then use session_destroy to end the session -->
<?php
session_start();
session_destroy();
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
            <li><a href="../login" class="alt-link">Login</a></li>
        </ul>
    </div>
    <div class="content flex">
        <h1>See you next time!</h1>
        <p><a href="../../gorgeous-cupcakes/">Return Home</a></p>
    </div>
    <div id="footer" class="flex-row">
        <ul>
            <li><a href="../../gorgeous-cupcakes">Home</a></li>
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