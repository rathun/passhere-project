<?php
session_start();
$tid=$_POST['tid'];
include 'db.php';
if($_SESSION['desig']=="Faculty")
{
	
 $c=substr($tid,0,1);
	if($c=="B")
	{
		$sql="UPDATE bike SET status='Department Faculty Approved',verify='1' WHERE track_id='$tid'";
		if(!mysqli_query($con,$sql))
		{
			echo mysqli_error($con);
		}
		else {
			 ?>
 <script type="text/javascript">
 	alert("Approved Successfully.");
 	location.replace("home.php");	
 </script>
 <?php
		}
	}
	if($c=="C")
	{
		$sql="UPDATE car SET status='Department Faculty Approved',verify='1' WHERE track_id='$tid'";
		if(!mysqli_query($con,$sql))
		{
			echo mysqli_error($con);
		}
		else {
			 ?>
 <script type="text/javascript">
 	alert("Approved Successfully.");
 	location.replace("home.php");	
 </script>
 <?php
		}
	}
	
	
}
else if($_SESSION['desig']=="HOD")
{
	include 'db.php';
 $c=substr($tid,0,1);
	if($c=="B")
	{
		$sql="UPDATE bike SET status='HOD Approved',verify='2' WHERE track_id='$tid'";
		if(!mysqli_query($con,$sql))
		{
			echo mysqli_error($con);
		}
		else {
			 ?>
 <script type="text/javascript">
 	alert("Approved Successfully.");
 	location.replace("home.php");	
 </script>
 <?php
		}
	}
	if($c=="C")
	{
		$sql="UPDATE car SET status='HOD Approved',verify='2' WHERE track_id='$tid'";
		if(!mysqli_query($con,$sql))
		{
			echo mysqli_error($con);
		}
		else {
			 ?>
 <script type="text/javascript">
 	alert("Approved Successfully.");
 	location.replace("home.php");	
 </script>
 <?php
		}
	}
	
	
}
else
{
include 'phpqrcode/qrlib.php'; 


$date=$_POST['date'];
$folder="Qrcode/";
 $file_name=$tid.".png";
 $file_name=$folder.$file_name;
 QRcode::png("http://projectsit2020.000webhostapp.com/Passhere/status.php?id=".$tid,$file_name);
 
 
 $c=substr($tid,0,1);
	if($c=="B")
	{
		$sql="UPDATE bike SET status='Approved',verify='3' WHERE track_id='$tid'";
		if(!mysqli_query($con,$sql))
		{
			echo mysqli_error($con);
		}
		else
		{
			?>
 <script type="text/javascript">
 	alert("QRcode Generated Successfully.");
 	location.replace("home.php");	
 </script>
 <?php
		}
	}
	if($c=="C")
	{
		$sql="UPDATE car SET status='Approved',verify='3' WHERE track_id='$tid'";
		if(!mysqli_query($con,$sql))
		{
			echo mysqli_error($con);
		}
		else
		{
			?>
 <script type="text/javascript">
 	alert("QRcode Generated Successfully.");
 	location.replace("home.php");	
 </script>
 <?php
		}
	}
	
	$sql1="INSERT INTO qrcode VALUES('$tid','$date','$file_name')";
	if(!mysqli_query($con,$sql1))
	{
		echo mysqli_error($con);
	}
	mysqli_close($con);
}
 //QRcode::png($id); 
?> 