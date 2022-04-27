<!DOCTYPE html>
<html lang="en">
<head>
    <?php
     session_start();
     include '../model/productModel.php';
     $product=showProduct($_GET['id']);
     ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>VIEW PRODUCT</h1>
    <link rel="stylesheet" href="../css/vendor.css">
</head>
<body>
    
                <p>Product Name:  <b><?php echo $product['product_name']?></b></p><br>
                <p>Product Price:  <b><?php echo $product['price']?></b></p><br>
                <p>Product category ID:  <b><?php echo $product['category_id']?></b></p><br>
                <p>Product quantity:  <b><?php echo $product['quantity']?></b></p><br>
                
                <a href="./vendor_dashboard.php"><button>Back to Dashboard</button></a>
    
</body>
</html>