<?php
include('../controller/myactioneditproduct.php');
require_once '../model/product_model.php';

$product=showProduct($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>

    <form action="" method='POST'>
    <fieldset>
    <legend>Edit Product</legend>
    <label for="product_id">ID</label>
    <input type="text" name="pid" id="pid" value="<?php echo $_GET['id'] ?>" ><br>
    <label for="product_name">Name</label>
    <input type="text" id="product_name" name="product_name" value="<?php echo $product['product_name']; ?>"><br>
    <label for="price">Buying Price</label>
    <input type="text" id="bprice" name="bprice" value="<?php echo $product['buying_price']; ?>"><br>
    <label for="price">Selling Price</label>
    <input type="text" id="sprice" name="sprice" value="<?php echo $product['selling_price']; ?>"><br><hr>
    <input type="checkbox" id="" name="" value="">Display<br><hr>
    <input type="submit" name="editproduct" value="SAVE">
    <?php ?>
    </fieldset>
    </form>
    
</body>
</html>
