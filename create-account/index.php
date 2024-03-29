<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <title>Gorgeous Cupcakes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/anicollection.css">
    <link rel="stylesheet" href="https://use.typekit.net/soa4xun.css">
    <script src="https://kit.fontawesome.com/55c4df76c1.js"></script>
    <script src="../scripts/form_validate.js"></script>
    
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
        <h1>Create an Account</h1>
        <?php
            //checks if there was an error with user input and echos appropriate message
            if(isset($_GET['error'])) {
                $error = $_GET['error'];
                switch ($error) {
                    case 1:
                        echo "<p class=\"error\">Please enter a valid e-mail address.</p>";
                        break;
                    case 2:
                        echo "<p class=\"error\">Please ensure your password is more than 8 characters in length.</p>";
                        break;
                    case 3:
                        echo "<p class=\"error\">Please ensure all fields are filled out.</p>";
                        break;
                }
            }
        ?>
        <form name="create" class="account-forms" action="../model/create_account.php" method="post">
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