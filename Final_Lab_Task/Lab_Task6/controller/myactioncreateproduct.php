<?php
include('../model/productModel.php');

$validproductname="";
$validprice="";
$productname=$price=$category=$image=$quantity="";

if(isset($_POST['create'])){


if(empty($_POST['product_name'])|| strlen($_POST['product_name'])<5){

    $validproductname="Please enter product name";
}
else{
    $productname=$_POST['product_name'];
    $data['productname'] = $productname;
}

if(empty($_POST['price'])||(strlen($_POST['price'])<0))
{
    $validprice="you must enter price";
}
else
{
    $price=$_POST['price'];
    $data['price'] = $price;
}
$category=$_POST['categories'];
$image=$_FILES["image"]["name"];
$quantity=$_POST['quantity'];
$data['category'] = $category;
$data['image'] = $image;
$data['quantity'] = $quantity;
    




if(isset($data['productname']) && isset($data['price'])) {
    if(addProduct($data))
    {
    echo 'Successfully added!!';
    }
    else {
        echo 'Data Successfully not added';
      }
}



 
 

        //    if(file_exists('../data/productdata.json') && $productname!="" && $price!="" && $category!="" && $image!="" && $quantity!="")  
        //    {
        //         $extra = array(  
        //              'user_name'      =>     $productname,  
        //              'price'          =>     $price,  
        //              'category_id'    =>     $category,
        //              'image'          =>     $image,
        //              'quantity'       =>     $quantity,  
                     
        //         );  
                
        //         $final_data=addData($extra);
	
        //         if(file_put_contents('../data/productdata.json', $final_data))  
        //         {  
        //             echo "Data successfully saved <br>";
        //             //header("location:load.php"); 
        //         }
                
        //    }  
        //    else  
        //    {  
        //         $error = 'JSON File not exits or There is a null value';  
        //    }
          

}





?>