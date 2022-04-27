<?php  
require_once '../model/product_model.php';

    
if (isset($_POST['editproduct'])) {
	$data['productname'] = $_POST['product_name'];
	$data['bprice'] = $_POST['bprice'];
	$data['sprice'] = $_POST['sprice'];
	// $data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);;

  if (updateProduct($_POST['pid'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
	header('Location: ../view/show_all_product.php');
  }
  else {
	echo 'You are not allowed to access this page.';
}
} 

?>