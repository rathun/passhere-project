<?php 
session_start();
if(isset($_SESSION['key']) && $_SESSION['key']==1)
{?>
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
  <style type="text/css">
  	th,td
  	{
  		text-align: center;
  	}
  	<style type="text/css">
 	* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #999966;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
 </style>
  </style>
  </head>
<body >
  <?php include 'header.php'; ?>
	<div class="container" >
	
<br>
<div><h1 align="center"><i>Approved Four Wheelers</i></h1></div><br>
<?php
	include 'db.php';
	
	?>
	<div class="table-responsive">          
  <table class="table">
		<tr><th>Track ID</th><th>Name</th><th>Roll No</th><th>Department</th><th>Car Model</th><th>Car No</th><th>Driving License</th><th>RC Book</th><th>Insurance</th><th>ID Card</th><th>Status</th></tr>
	<?php
	
  $depart=$_SESSION['department'];
$desig=$_SESSION['desig'];
if($desig=="Faculty")
{
  $sql="SELECT * FROM car WHERE  department='$depart'  ORDER BY track_id";
	
	if($res=mysqli_query($con,$sql))
	{
		while($row=mysqli_fetch_array($res))
		{
			if($row['verify']>="1")
				 {
			?><tr><td><?php echo $row['track_id']; ?></td>
				  <td><?php echo $row['name']; ?></td>
				  <td><?php echo $row['roll_no']; ?></td>
				   <td><?php echo $row['department']; ?></td>
				  <td><?php echo $row['car_model']; ?></td>
				  <td><?php echo $row['car_no']; ?></td>
				  <td><a href="Files/License/<?php echo $row['driving_license']; ?>" download>DRIVING LICENSE</td>
				  <td><a href="Files/RCBook/<?php echo $row['rc_book'];?>" download>RC BOOK</td>
				  <td><a href="Files/Insurance/<?php echo $row['insurance'];?>" download>INSURANCE</td>
				 <td><a href="Files/Id_Card/<?php echo $row['id_card'];?>" download>ID CARD</td>
				  <td><?php echo $row['status']; ?></td>
				  
				  <?php
				}
				else
				{
	    ?><tr><td colspan="11">No Records Found.</td></tr><?php
	}
				}?>
			  </tr>
			<?php
		}
	
	

	
	else
	{
		echo mysqli_error($con);
	}
}
else if($desig=="HOD")
  {
    $sql="SELECT * FROM car WHERE department='$depart' ORDER BY track_id";
    if($res=mysqli_query($con,$sql))
  {
    while($row=mysqli_fetch_array($res))
    {
      if($row['verify']>="2")
         {
      ?><tr><td><?php echo $row['track_id']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['roll_no']; ?></td>
           <td><?php echo $row['department']; ?></td>
          <td><?php echo $row['car_model']; ?></td>
          <td><?php echo $row['car_no']; ?></td>
          <td><a href="Files/License/<?php echo $row['driving_license']; ?>" download>DRIVING LICENSE</td>
          <td><a href="Files/RCBook/<?php echo $row['rc_book'];?>" download>RC BOOK</td>
          <td><a href="Files/Insurance/<?php echo $row['insurance'];?>" download>INSURANCE</td>
         <td><a href="Files/Id_Card/<?php echo $row['id_card'];?>" download>ID CARD</td>
          <td><?php echo $row['status']; ?></td>
          
          <?php
        }
        else
        {
      ?><tr><td colspan="11">No Records Found.</td></tr><?php
  }
        }?>
        </tr>
      <?php
    }
  
  

  
  else
  {
    echo mysqli_error($con);
  }
}
else
  {
  $sql="SELECT * FROM car ORDER BY track_id";
  if($res=mysqli_query($con,$sql))
  {
    while($row=mysqli_fetch_array($res))
    {
      if($row['verify']>="2")
         {
      ?><tr><td><?php echo $row['track_id']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['roll_no']; ?></td>
           <td><?php echo $row['department']; ?></td>
          <td><?php echo $row['car_model']; ?></td>
          <td><?php echo $row['car_no']; ?></td>
          <td><a href="Files/License/<?php echo $row['driving_license']; ?>" download>DRIVING LICENSE</td>
          <td><a href="Files/RCBook/<?php echo $row['rc_book'];?>" download>RC BOOK</td>
          <td><a href="Files/Insurance/<?php echo $row['insurance'];?>" download>INSURANCE</td>
         <td><a href="Files/Id_Card/<?php echo $row['id_card'];?>" download>ID CARD</td>
          <td><?php echo $row['status']; ?></td>
          
          <?php
        }
        else
        {
      ?><tr><td colspan="11">No Records Found.</td></tr><?php
  }
        }?>
        </tr>
      <?php
    }
  
  

  
  else
  {
    echo mysqli_error($con);
  }
}
	if(mysqli_num_rows($res)==0)
	{
	    ?><tr><td colspan="11">No Records Found.</td></tr><?php
	}
	

	mysqli_close($con);

 ?>

 	</table></div>
 	<!-- <p align="center"><a href="main.php"><button class="btn btn-danger">Back</button></a></p> -->
 	</div>
</body>
</html><?php
}
else
{
	header("location:login.php");
}