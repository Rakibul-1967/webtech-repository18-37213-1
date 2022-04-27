<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/vendor.css">
    <title>Document</title>
    <h3>Product List</h3>
</head>
<body>
    <!--onload="data( //$txt )"-->
<div class=""> 
        <table class="">  
            <tr>  
                <th>product_name</th> 
                <th>price</th>  
                <th>category_id</th> 
                <th>quantity</th>
                <th colspan="3">Action</th>   
                
            </tr>  
       <!--     <tbody id="producttable"></tbody> -->
            <?php   
            session_start();
            include '../model/productModel.php';
            //$txt="";
            $data = showAllProducts();
            foreach($data as $row)  
            {  
                echo "<tr>
                <td>".$row['product_name']."</td>
                <td>".$row['price']."</td>
                <td>".$row['category_id']."</td>
                <td>".$row['quantity']."</td>
                <td><a href='view_product.php?id=".$row['product_id']."'><button>DETAILS</button></a></td>
                <td><a href='update_product.php?id=".$row['product_id']."'><button>Edit</button></a></td>
                <td><a href='../controller/myactiondeleteproduct.php?id=".$row['product_id']."'><button>Delete</button></a></td>
                </tr>";  
            }  
            ?>  
        </table> 
        
        <a href="./vendor_dashboard.php"><button>Back to Dashboard</button></a>
</div>
            
</body>
</html>