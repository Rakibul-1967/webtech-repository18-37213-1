<?php
require_once 'model.php';
$txt="";
$conn = db_conn();
    $selectQuery = "SELECT * FROM `products` WHERE product_name LIKE '%".$_GET['q']."%'";

    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($rows as $row)
    {
    echo "<tr>
    <td>".$row['product_name']."</td>
    <td>".$row['price']."</td>
    <td>".$row['category_id']."</td>
    <td>".$row['quantity']."</td>
    </tr>"; 
    }

?>