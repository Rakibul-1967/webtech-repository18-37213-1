<?php
include '../model/vendorModel.php';
session_start();
$validusername="";
$username=$password="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
if(isset($_REQUEST['remind']))
{
    $cookie_name = "user";
    $cookie_value = "Rakibul";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

}

if(empty($_REQUEST['user_name'])|| empty($_REQUEST['vpsw']))
{

    $validusername="Please enter valid name or Password";
}
else
{
    
    $username=$_REQUEST["user_name"];
    $password=$_REQUEST["vpsw"];
            $data = getData();
            foreach($data as $row)  
            {  
                if($row['user_name']==$username && $row['password']=$password)
                {
                    $_SESSION["username"]=$username;
                    break;
                }
                else
                {
                    $validusername="your username or password is incorrect";
                }
            } 
    
    
}

}





?>