<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/vendor.css">
    <title>Document</title>
    <h3>Search Product</h3>
</head>
<body>
<input type="text" class="search" name="search" id="search" onkeyup="search(this.value)" placeholder="search product here">
<div class=""> 
    <form >
        <table class="">  
            <tr>  
                <th>product_name</th> 
                <th>price</th>  
                <th>category_id</th> 
                <th>quantity</th>  
                
            </tr> 
            <tbody id="producttable">

            </tbody>
        </table>  
    </form>
        <a href="./vendor_dashboard.php"><button>Back to Dashboard</button></a>
</div>
    <script src="../js/searchProduct.js"></script>
</body>
</html>
            