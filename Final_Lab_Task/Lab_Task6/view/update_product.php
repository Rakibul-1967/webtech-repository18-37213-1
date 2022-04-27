<?php
include('../controller/myactionupdateproduct.php');
require_once '../model/productModel.php';
session_start();
$product=showProduct($_GET['id']);
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
    <form action="" onsubmit="return validform()" method='POST' enctype="multipart/form-data">
    <fieldset>
    <legend>Update Product</legend>
    <label for="product_id">ID</label>
    <input type="text" name="pid" id="pid" value="<?php echo $_GET['id'] ?>" ><span id="errorid"></span><br>
    <label for="categories">Choose a Category:</label>

    <select name="categories" id="categories">
        <?php
        ?>
        <option value="1">Sports</option>
        <option value="2">Groceries</option>
        <option value="3">Clothing</option>
        <option value="4">cars</option>
        <option value="5">Bikes</option>
       
    </select><br>
    <label for="product_name">Product Name</label>
    <input type="text" id="product_name" name="product_name" value="<?php echo $product['product_name']; ?>" ><span id="errorname"></span><br>
    <label for="">Image</label>
    <input type="file" id="image" name="image"><br>
    <label for="price">Price</label>
    <input type="text" id="price" name="price" value="<?php echo $product['price']; ?>"><span id="errorprice"></span><br>
    <label for="quantity">Quantity</label>
    <input type="text" id="quantity" name="quantity" value="<?php echo $product['quantity'] ?>"><span id="errorquantity"></span><br>
    <input type="submit" name="update" value="Update">
    
    </fieldset>

    </form>
    <script src="../js/updateProduct.js"></script>
</body>
</html>
