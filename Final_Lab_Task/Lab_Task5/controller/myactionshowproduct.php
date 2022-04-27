<?php
   require_once '../model/product_model.php';

   function showProducts()
   {
       $products= showAllProducts();
       return $products;
   }
?>