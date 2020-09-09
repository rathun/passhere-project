<?php 
session_start();
if(isset($_SESSION['key']) && $_SESSION['key']==1)
{?>
<html>
<head>
	<title>Bike</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/home.css">  
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
 <style type="text/css">
 	

 </style>
</head>
<body >
  <?php include 'header.php'; ?>
	<div class="container" >

<br>	
			<div style="text-align: center;"><h1><i>Two Wheelers</i></h1></div><br>
		<div class="card-deck" >
    <div class="card bg-success">
      <div class="card-body text-center">
		
					<p align="center"><a  href="bike_approved.php" style="text-decoration: none;color:white"><img src="images/approve.png" ></p>
					<p align="center" style="color:white;text-decoration: none">Approved Applications</p></a>
		</div>
	</div>
	<div class="card bg-warning">
      <div class="card-body text-center">
					
					<p align="center"><a href="bikepending.php" style="text-decoration: none;color:white"><img src="images/pending.png" ></p>
					<p align="center" style="color:white;text-decoration: none">Pending Applications</p></a>
					</div>
			</div>
		</div><br>
		
	</div>
</body>
</html><?php
}
else
{
	header("location:login.php");
}