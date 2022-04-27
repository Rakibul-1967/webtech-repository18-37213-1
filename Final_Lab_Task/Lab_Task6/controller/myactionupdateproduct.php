<?php
require_once '../model/productModel.php';
$validproductname="";
$validprice="";
$productname=$price=$category=$image=$quantity="";

if(isset($_POST["update"])){


    if(empty($_POST['product_name'])&& strlen($_POST['product_name'])<5){

        $validproductname="Please enter product name";
    }
    else{
        $productname=$_POST['product_name'];
    }

    if(empty($_POST['price'])&&(strlen($_POST['price'])<0))
    {
        $validprice="you must enter price";
    }
    else
    {
        $price=$_POST["price"];
    }

    $category=$_POST['categories'];
    $image=$_FILES['image']['name'];
    $quantity=$_POST['quantity'];


    $data['category'] = $category;
    $data['productname'] = $productname;
    $data['image'] = $image;
	$data['price'] = $price;
	$data['quantity'] = $quantity;


    if(updateProduct($_POST['pid'], $data)) {
        echo 'Successfully updated!!';
        //redirect to showProduct
      header("Location: productlist.php");
    
    }
    else {
        echo 'You are not allowed to access this page.';
    }
}










?>