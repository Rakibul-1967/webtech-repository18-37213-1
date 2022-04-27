<?php
$validusername="";
$validpassword="";
$validaccountno="";
$validaddress="";
$username=$password=$accountno=$address="";

if(isset($_POST['submit'])){


if(empty($_POST['user_name'])&& strlen($_POST['user_name'])<5){

    $validusername="Please enter valid name";
}
else{
    $username=$_POST["user_name"];
}

if(empty($_POST['vpsw'])&&(strlen($_POST['vpsw'])<8))
{
    $validpassword="you must enter password";
}
else
{
    
    $password=$_POST["vpsw"];
}

if(strlen($_POST['account_no'])<10 || strlen($_POST['account_no'])>10){

    $validaccountno="Please enter valid account no";
}
else{
    $accountno=$_REQUEST['account_no'];
}
if(empty($_POST['vaddress'])|| strlen($_POST['vaddress'])<1){

    $validaddress="Please enter valid address";
}
else{
    $address=$_POST['vaddress'];
}




 
include('../model/vendorModel.php');
 
 //if(isset($_POST["submit"]))  
 //{  

           if(file_exists('../data/vendordata.json') && $username!="" && $password!="" && $accountno!="" && $address!="")  
           {
                $extra = array(  
                     'user_name'      =>     $username,  
                     'password'       =>     $password,  
                     'account_no'     =>     $accountno,  
                     'address'        =>     $address,  
                     
                );  
                
                $final_data=addData($extra);
	
                if(file_put_contents('../data/vendordata.json', $final_data))  
                {  
                    echo "Data successfully saved <br>";
                    //header("location:load.php"); 
                }
                
           }  
           else  
           {  
                $error = 'JSON File not exits or There is a null value';  
           }
          
 }  
 


?>
