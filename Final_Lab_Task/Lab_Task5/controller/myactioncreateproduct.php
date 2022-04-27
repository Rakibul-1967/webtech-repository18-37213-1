<?php  
require_once '../model/product_model.php';


if (isset($_POST['create'])) {
	$data['productname'] = $_POST['productname'];
	$data['bprice'] = $_POST['bprice'];
	$data['sprice'] = $_POST['sprice'];

  if (addProduct($data)) {
  	echo 'Successfully added!!';
  }

else {
	echo 'You are not allowed to access this page.';
}

}

?>