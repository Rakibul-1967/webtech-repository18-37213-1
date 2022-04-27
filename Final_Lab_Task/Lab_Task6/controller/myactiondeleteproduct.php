<?php
require_once '../model/productModel.php';

if(deleteProduct($_GET['id']))
{
    echo "Product successfully deleted";
    header('Location: ../view/productlist.php');
}
?>