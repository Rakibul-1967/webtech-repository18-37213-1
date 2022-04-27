
<?php
include('../controller/myactionvendorlogin.php');
if(isset($_SESSION['username']))
{
    header("Location: vendor_dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/vendor.css">
    <title>Document</title>
    
    
</head>
<body>
    <form action="" method="POST">
        <fieldset>
        <legend>Vendor Login</legend>
        <label for="user_name">User Name</label>
        <input type="text" id="user_name" name="user_name" placeholder="Enter your user name" ><br>
        <label for="vpsw">Password</label>
        <input type="password" id="vpsw" name="vpsw" placeholder="Enter your Password">  <?php echo $validusername?><br>
        <input type="checkbox" name="remind" id="remind"> Remind Me <br>
        <input type="submit" value="Login"><br>
        <span>New member? <a href="./vendor_signup.php"><b>Register</b></a> here</span>
    </form>
    
</body>
</html>