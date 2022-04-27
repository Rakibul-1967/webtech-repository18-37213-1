<?php  
require_once '../model/product_model.php';

    if(deleteProduct($_GET['id']))
    {
        echo "Product successfully deleted";
        header('Location: ../view/show_all_product.php');
    }
?>