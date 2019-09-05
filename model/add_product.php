<?php

    //connect to the database
    require('../model/database.php');

    //retrieve user input from form

    $productName = $_POST['productName'];
    $productDescription = $_POST['productDescription'];
    $productPrice = floatval($_POST['productPrice']);
    $category = $_POST['category'];

    //check if the product name or product description is empty and if so return an error

    if (empty($productName) or empty($productDescription)) {
        header('location:../add-product?error=1');
        exit;
    }

    //check if the product price is not numeric or if it is empty and if so return an error

    if (!is_numeric($productPrice) or empty($productPrice)) {
        header('location:../add-product?error=2');
        exit;
    }

    //insert into database

    $sql = "INSERT INTO gorgeous_cupcakes.products (product_name, product_description, product_price, category_id, product_photo) VALUES ('$productName', '$productDescription', $productPrice, '$category', NULL)";

    $conn->exec($sql);

    //redirect
    header('location:../add-product?success');

?>