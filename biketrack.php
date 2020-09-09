<html>
<head>
	<title>Track Status</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/home.css">  
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
th,td{
    text-align:center;
}
</style>
  </head>
<body >
	<?php include 'header.php'; ?><br/>
<div class="container">

    
<?php
	include 'db.php';
	$id=$_POST['tid'];
	?>
	<div class="table-responsive">          
  	<table class="table table-bordered">
	
		
	<?php
	$c=substr($id,0,1);
	if($c=="B")
	{
		?><tr><th>Track ID</th><th>Name</th><th>Roll No</th><th>Bike No</th><th>Status</th></tr><?php
	$sql="SELECT * FROM bike WHERE track_id='$id'";
	if($res=mysqli_query($con,$sql))
	{
		while($row=mysqli_fetch_array($res))
		{
			?><tr><td><?php echo $row['track_id']; ?></td>
				  <td><?php echo $row['name']; ?></td>
				  <td><?php echo $row['roll_no']; ?></td>
				  
				  <td><?php echo $row['bike_no']; ?></td>
				  <td><?php echo $row['status']; ?></td>
			  </tr>
			<?php
			if($row['status']=="Approved")
		{
		$sql1="SELECT * FROM qrcode WHERE track_id='$id'";
		if($res=mysqli_query($con,$sql1))
		{
			$row=mysqli_fetch_array($res);?>
			<tr><td colspan="5"><img src="<?php echo $row['qrcode']; ?>" ></td></tr><?php
		}
		else
		{
			echo mysqli_error($con);
		}
		
	
		}
		}
	}
	

	
	else
	{
		echo mysqli_error($con);
	}
	
	}
	if($c=="C")
	{
		?><tr><th>Track ID</th><th>Name</th><th>Roll No</th><th>Bike Model</th><th>Status</th></tr><?php
	$sql="SELECT * FROM car WHERE track_id='$id'";
	if($res=mysqli_query($con,$sql))
	{
		while($row=mysqli_fetch_array($res))
		{
			?><tr><td><?php echo $row['track_id']; ?></td>
				  <td><?php echo $row['name']; ?></td>
				  <td><?php echo $row['roll_no']; ?></td>
				  <td><?php echo $row['car_model']; ?></td>
				  <td><?php echo $row['status']; ?></td>
			  </tr>
			<?php
			if($row['status']=="Approved")
			{
		$sql1="SELECT * FROM qrcode WHERE track_id='$id'";
		if($res=mysqli_query($con,$sql1))
		{
			$row=mysqli_fetch_array($res);?>
			<tr><td colspan="5"><img src="<?php echo $row['qrcode']; ?>" ></td></tr><?php
		}
		else
		{
			echo mysqli_error($con);
		}
		
	
		}
		}
	}
	

	
	else
	{
		echo mysqli_error($con);
	}
	
	}
	if($c=="V")
	{
		?><tr><th>Track ID</th><th>Name</th><th>Vehicle Model</th><th>Vehicle No</th><th>Mobile No</th><th>Status</th></tr><?php
	$sql="SELECT * FROM vehicle WHERE track_id='$id'";
	if($res=mysqli_query($con,$sql))
	{
		while($row=mysqli_fetch_array($res))
		{
			?><tr><td><?php echo $row['track_id']; ?></td>
				  <td><?php echo $row['name']; ?></td>
				  <td><?php echo $row['vehicle_model']; ?></td>
				  <td><?php echo $row['vehicle_no']; ?></td>
				  <td><?php echo $row['mobile']; ?></td>
				  <td><?php echo $row['status']; ?></td>
			  </tr>
			<?php
			if($row['status']=="Approved")
			{
		$sql1="SELECT * FROM qrcode WHERE track_id='$id'";
		if($res=mysqli_query($con,$sql1))
		{
			$row=mysqli_fetch_array($res);?>
			<tr><td colspan="6"><img src="<?php echo $row['qrcode']; ?>" ><br></td></tr><?php
		}
		else
		{
			echo mysqli_error($con);
		}
		
	
		}
		}
	}
	

	
	else
	{
		echo mysqli_error($con);
	}
	
	}

	mysqli_close($con);

 ?>
 
 	</table></div>
 	</div>
	 
	 </div>
</body>
</html>