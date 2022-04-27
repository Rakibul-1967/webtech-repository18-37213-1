<?php  
include '../controller/myactionshowproduct.php';

$products = showProducts();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<fieldset>
	<legend>Product Table</legend>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Profit</th>
			<th></th>
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product): ?>
			<tr>
				
				<td><?php echo $product['product_name'] ?></td>
				<td><?php echo $product['profit'] ?></td>
				<td><a href="../view/edit_product.php?id=<?php echo $product['product_id']?>"><button>Edit</button></a></td>
				<td><a href="../controller/myactiondeleteproduct.php?id=<?php echo $product['product_id']?>"><button>Delete</button></a></td>
				
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>

</fieldset>
</body>
</html>