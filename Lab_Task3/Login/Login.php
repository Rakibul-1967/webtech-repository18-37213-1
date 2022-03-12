<?php
	

	
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	
	$has_error = false;
	
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(empty($_POST["user_name"])&&strlen($_POST["user_name"]) < 2){
			$err_username="*Username must be 2 characters long";
			$hasError = true;
		}
		else{
			$username=$_POST["user_name"];
		}

		if(empty($_POST["password"]) && strlen($_POST["password"]< 8))
		{
			$err_password="*Password must be 8 characters long";
			$hasError = true;
		}
		else{
			$password=$_POST["password"];
		}
	}
	
?>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		
		<hr>
		<form action="" method="POST">
			<fieldset>
				<legend>Login</legend>
				<table>
					
					<tr>
						<td align="right">Username:</td>
						<td><input type="text" id="user_name" name="user_name"><span><?php echo $err_username;?></span></td>
					</tr>
					<tr>
						<td align="right">Password:</td>
						<td><input type="password" id="password" name="password"><span><?php echo $err_password;?></span></td>
					</tr>
					
					
					
				</table>


			</fieldset>
			<hr>
              <input type="checkbox" name="checkRemember">Remember Me
               <br><br>
              <input type="submit" name="submit" value="Submit"> <a href="forgotpassword.html">Forgot Paswword?</a>
			
	
		          </fieldset>
		
		</form>
	</body>
	
</html>