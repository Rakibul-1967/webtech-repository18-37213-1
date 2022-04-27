<?php  

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<fieldset>
	<legend>Product Table</legend>

    
<!--<form action="" onsubmit="search_product()"> -->
<input type="text" class="search" name="search" id="search" onkeyup="search_product(this.value)" placeholder="search product here">

<!--<input name="submit" id="submit" type="submit" value="Search">

</form> -->
    <table>

	<thead>
		<tr>
            <th>ID</th>
			<th>Name</th>
			<th>Profit</th>
			<th></th>
			
		</tr>
	</thead>
	<tbody id="producttable">
		
	</tbody>
	

</table>

</fieldset>
</body>
<script src="../js/search.js"></script>
</html>