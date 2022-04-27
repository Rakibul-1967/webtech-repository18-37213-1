<?php
session_start();
// $cookie_name = "user";
// $cookie_value = "Rakibul";
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/vendor.css">
    <title>Document</title>
    <?php echo "<h1>Hi,".$_SESSION['username']."</h1>";?>
</head>
<body>
    <h1>Welcome to vendor Dashboard</h1>
    <ul>
    <li><a href="./create_product.php"><button>CreateProduct</button></a></li>
    <li><a href="./productlist.php"><button>ProductList</button></a></li>
    
    <li><a href="../controller/myactionlogout.php"><button>LogOut</button></a></li>
    </ul>
</body>
</html>