<?php
require_once 'model.php';
function showAllProducts(){
	$conn = db_conn();
    $selectQuery = 'SELECT *  FROM `products`';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showProduct($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `products` where product_id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}


function addProduct($data){
	$conn = db_conn();
    $selectQuery = "INSERT into products(product_name, price, quantity, image, category_id)
    VALUES (:name, :price, :quantity, :img, :categoryid)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['productname'],
        	':price' => $data['price'],
        	':quantity' => $data['quantity'],
			':img' => $data['image'],
			//':vendorid' => $data['sprice'],
			':categoryid' => $data['category'],
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateProduct($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `products` SET product_name = ?, price = ?, quantity = ?, image = ?, category_id = ? where product_id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['productname'], $data['price'], $data['quantity'], $data['image'], $data['category'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteProduct($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `products` WHERE product_id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}





/*
function getData(){
	$data = file_get_contents("../data/productdata.json");  
 	$data = json_decode($data, true); 
 	return $data;
}

function addData($data){

	$current_data = file_get_contents('../data/productdata.json');  
	$array_data = json_decode($current_data, true); 
	$array_data[] = $data;  
	$final_data = json_encode($array_data);  
	return $final_data;
	
}
*/
 ?>