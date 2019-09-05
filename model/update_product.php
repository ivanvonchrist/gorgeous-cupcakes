<?php

    //connect to the database and include alert function
    require('../model/database.php');

    //parse URL to get id
    $id = $_GET['id'];

    //retrieve user input from form
    $productName = $_POST['productName'];
    $productDescription = $_POST['productDescription'];
    $productPrice = floatval($_POST['productPrice']);
    $category = $_POST['category'];

    //check if the product name or product description are empty and if so return an error
    if (empty($productName) or empty($productDescription)) {
        $params = $id . '&error=1';
        header('location:../../update-product?id='.$params);
        exit;
    } 
    
    //check if the product price is not a numeric value or if it is empty and if so return an error
    if (!is_numeric($productPrice) or empty($productPrice)) {
        $params = $id . '&error=2';
        header('location:../../update-product?id='.$params);
        exit;
    }

    //insert into database
    $sql = "UPDATE gorgeous_cupcakes.products SET product_name='$productName', product_description='$productDescription', product_price=$productPrice, category_id='$category' WHERE product_id='$id'";

    $conn->exec($sql);

    //redirect the user upon success
    $params = $id . '&success';
    header('location:../../update-product?id='.$params);

?>