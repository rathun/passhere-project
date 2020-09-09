<?php 
session_start();
if(isset($_SESSION['key']) && $_SESSION['key']==1)
{?>
<html>
<head>
	<title>Home-Admin</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/home.css">  
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
 
 </style>
</head>
<body >
	
 
    <?php include 'header.php'; ?>
    
<br>
<div class="container" >
        <h3 class="text-center"><i>Home</i></h3><br/>
        <div class="card-deck" >
    <div class="card bg-primary">
      <div class="card-body text-center">
        
                    <p align="center"><a href="bike_home.php" style="text-decoration: none;color:white"><img src="images/bike1.png" ></p>
                    <p align="center" style="color:white;">Two Wheeler</p></a>
        </div>
    </div>
	<div class="card bg-danger">
      <div class="card-body text-center">
                    
                    <p align="center"><a href="car_home.php" style="text-decoration: none;color:white"><img src="images/cars1.png" style="text-decoration: none;color:white"></p>
                    <p align="center" style="color:white;text-decoration: none">Four Wheeler</p></a>
                    </div>
            </div>
        </div>
		</div>
	</div>

</body>
</html><?php
}
else
{
	header("location:login.php");
}