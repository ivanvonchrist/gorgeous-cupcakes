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
            <li><a href="../login/" class="alt-link">Login</a></li>
        </ul>
    </div>
    <div class="content flex">
        <h1>Create an Account</h1>
        <form class="account-forms" action="../model/create_account.php" method="post">
            <label>First Name:</label><br>
            <input type="text" name="firstName"><br>
            <label>Last Name:</label><br>
            <input type="text" name="lastName"><br>
            <label>E-mail:</label><br>
            <input type="text" name="email" placeholder="eg. susie@email.com" onfocus="this.placeholder = ''" onblur="this.placeholder = 'eg. susie@email.com'"><br>
            <label>Username:</label><br>
            <input type="text" name="username"><br>
            <label>Password:</label><br>
            <input type="password" name="password"><br>
            <input type="submit" value="Register Account"><br>
            <button class="alt-button" type="button" onclick="window.location='../../gorgeous-cupcakes/'">Cancel</button>
        </form>
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