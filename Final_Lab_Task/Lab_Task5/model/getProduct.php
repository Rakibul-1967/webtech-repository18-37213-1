<?php
require_once 'db_connect.php';
$txt="";
$conn = db_conn();
    $selectQuery = "SELECT product_name,selling_price-buying_price AS profit,product_id FROM `products` WHERE product_name LIKE '%".$_GET['q']."%'";

    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($rows as $row)
    {
    echo "<tr>
    <td>". $row['product_id']."</td>
    <td>". $row['product_name']."</td>
    <td>". $row['profit']."</td>
    <td><a href='../view/edit_product.php?id=".$row['product_id']."'><button>Edit</button></a></td>
    <td><a href='../controller/myactiondeleteproduct.php?id=".$row['product_id']."'><button>Delete</button></a></td>
    </tr>"; 
    }
?>