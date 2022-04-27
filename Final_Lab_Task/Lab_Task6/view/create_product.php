<?php
include('../controller/myactioncreateproduct.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/vendor.css">
    <title>Document</title>
</head>
<body>
<a href="./vendor_dashboard.php"><button>Back to Dashboard</button></a>
    <form action="" method='POST' onsubmit="return validform()" enctype="multipart/form-data">
    <fieldset>
    <legend>Create Product</legend>
    
    <label for="categories">Choose a Category:</label>

    <select name="categories" id="categories">
        <option value="1">Sports</option>
        <option value="2">Groceries</option>
        <option value="3">Clothing</option>
        <option value="4">cars</option>
        <option value="5">Bikes</option>
    </select><br>
    <label for="product_name">Product Name</label>
    <input type="text" id="product_name" name="product_name" placeholder="Enter your Product Name"><span id="errorname"></span><br>
    <label for="image">Image</label>
    <input type="file" id="image" name="image"><br>
    <label for="price">Price</label>
    <input type="text" id="price" name="price" placeholder="Enter your Product price"><span id="errorprice"></span><br>
    <label for="quantity">Quantity (between 1 and 100):</label>
    <input type="number" id="quantity" name="quantity" min="1" max="100"><span id="errorquantity"></span><br>
    <input type="submit" name="create" value="Create">
    
    </fieldset>
    </form>
    <script src="../js/createProduct.js"></script>
</body>
</html>
