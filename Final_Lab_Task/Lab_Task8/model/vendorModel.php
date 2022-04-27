<?php 
function getData(){
	$data = file_get_contents("../data/vendordata.json");  
 	$data = json_decode($data, true); 
 	return $data;
}

function addData($data){

	$current_data = file_get_contents('../data/vendordata.json');  
	$array_data = json_decode($current_data, true); 
	$array_data[] = $data;  
	$final_data = json_encode($array_data);  
	return $final_data;
	
}

 ?>