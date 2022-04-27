
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
        <form action="" onsubmit="return validateForm()" method="POST">
        <fieldset>
        <legend>Vendor Signup</legend>
        <label for="user_name">User Name</label>
        <input type="text" id="user_name" name="user_name" placeholder="Enter your user name" ><span id="errorusername"></span><br>
        <label for="vpsw">Password</label>
        <input type="password" id="vpsw" name="vpsw" placeholder="Enter your Password" ><span id="errorpass"></span><br>
        <label for="account_no">Account no</label>
        <input type="text" id="account_no" name="account_no" placeholder="you must enter 10 digit no" ><span id="erroraccountno"></span><br>
        <label for="vaddress">Address</label>
        <input type="text" id="vaddress" name="vaddress" placeholder="Enter your address" ><span id="erroraddress"></span><br>
        <input type="submit" name="submit" value="sign up"><br>
        <span>Already member? <a href="./vendor_login.php"><b>Login</b></a> here</span>
        
        </fieldset>


    </form>
    <script src="../js/vendorSignup.js"></script>
</body>
</html>