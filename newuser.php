<?php
	session_start();
	if(isset($_SESSION['key']) && $_SESSION['key']==1)
	{
		include 'db.php';
		$name=$_POST['name'];
		$desig=$_POST['desig'];
		$depart=$_POST['depart'];
		$un=$_POST['username'];
		$pass=$_POST['password'];
		$pass=md5($pass);
		$sql="INSERT INTO user VALUES ('$name','$desig','$depart','$un','$pass')";
		if(mysqli_query($con,$sql))
		{
			?><script>alert("New User Created Successfully");
			location.replace("newuser_form.php");
		</script><?php
		}
		else
		{
			echo mysqli_error($con);
		}
	}
	else
	{
		header("loaction:login.php");
	}

?>