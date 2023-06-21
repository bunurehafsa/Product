<?php
include "dbconnect.php";
	session_start();
	if(isset($_POST['login'])){  
	
		$username=$_POST['f_username'];
		$password=$_POST['f_password'];
		$sql="SELECT * FROM user WHERE user_name='$username' AND password='$password' ";
		
		$result=$conn->query($sql);
		$r=$result->fetch_assoc();
		//echo $result->num_rows;
		if($r==NUll){
			$sql=" SELECT * FROM user WHERE user_name='$username'";
			$result=$conn->query($sql);
		    $r=$result->fetch_assoc();
			
			if($r==NULL){
				echo" Incorrect Username";
			}else{
				echo" Your password is invalid !!";
			}
		}else{
			$_SESSION['name']=$r['u_name'];
			$_SESSION['username']=$r['user_name'];
			$_SESSION['password']=$r['password'];
			
			header('location:index.php');
			//echo "successfully logged in";
			
		}
		
   }

?>
<!DOCTYPE html>
<html lang="en">
<body  style="background-color:#f1f2f6">	
	<center style="background-color:#95afc0;  "  >
		<h1>Log in Form</h1>
		<form  method="POST" action="login.php">

			<label>User Name</label>
			<input  type="text" placeholder="Enter name" name="f_username"required > <br> <br>
			<label>Password</label>
			<input "type="text" placeholder="Enter password" name="f_password"required  > <br> <br>
			
			<input  type="submit" value="Log in" name="login">
		</form>
		 Don't have an account?<a href="register.php"><button style="background-color:#81ecec; border-radius:15px;">Register</button> </a> 
	</center>	
	
</body>
</html>