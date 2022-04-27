
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../controller/myactioncreateproduct.php');  ?>
</head>
<body>

    <form action="" method='POST'>
    <fieldset>
    <legend>ADD Product</legend>
    
    <label for="product_name">Name</label>
    <input type="text" id="productname" name="productname"><br>
    <label for="price">Buying Price</label>
    <input type="text" id="bprice" name="bprice"><br>
    <label for="price">Selling Price</label>
    <input type="text" id="sprice" name="sprice"><br><hr>
    <input type="checkbox" id="" name="" value="">Display<br><hr>
    <input type="submit" name="create" value="SAVE">
    
    </fieldset>
    </form>
    
</body>
</html>
