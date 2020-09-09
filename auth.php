<?php
	
	include 'db.php';
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password=md5($password);
	
	?><?php
	$sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
	if($result=mysqli_query($con,$sql))
	{
		$n=mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if($n==1)
		{
			$_SESSION['key']=1;
			$_SESSION['name']=$row['name'];
			$_SESSION['department']=$row['department'];
			$_SESSION['desig']=$row['designation'];
			header("location:home.php");
			
			
			
			
			
		}
		else
		{
			?><script>alert("Invalid Username & Password."); 
			location.replace("login.php");</script><?php
					
		}
	}
	else
	{
		echo mysqli_error($con);
	}
	
	mysqli_close($con);
?>