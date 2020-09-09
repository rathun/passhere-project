<?php

$c=$_POST['type'];
$no=$_POST['no'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Status</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/font.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body class="bg">
    <?php
        include 'db.php';
       
        if($c=="Bike")
        {
        $sql="SELECT * FROM bike WHERE bike_no='$no'";
        if($res=mysqli_query($con,$sql))
        {
            $row=mysqli_fetch_array($res);
            $tid=$row['track_id'];
            $sql1="SELECT date FROM qrcode WHERE track_id='$tid'";
            if($res1=mysqli_query($con,$sql1))
            {
                $row1=mysqli_fetch_array($res1);
                ?>
                <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title "><center><i>KEC-VPMS</i></center></h4>
          <a href="pass_verification.php"> <button type="button" class="close" >&times;</button></a>
        </div>
        
          <h4 ><center><i>Vehicle Details</i></center></h4>
          
        
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-bordered">
                <tr><td>Name</td><td><?php echo $row['name']; ?></td></tr>
                <tr><td>Roll No</td><td><?php echo $row['roll_no']; ?></td></tr>
                <tr><td>Department</td><td><?php echo $row['department']; ?></td></tr>
                <tr><td>Vehicle No</td><td><?php echo $row['bike_no']; ?></td></tr>
                <tr><td>Mobile</td><td><?php echo $row['mobile']; ?></td></tr>
                <tr><td>Approved on</td><td><?php echo $row1['date']; ?></td></tr>
                <tr><td>Status</td><?php if($row['status']=="Approved"){ 
                    ?>
                    <td style="color:green"><?php 
                    echo $row['status']; 
                    ?></td><?php 
                } 
                else 
                    { ?>
                        <td style="color:red"><?php echo $row['status']; ?></td><?php } ?> </tr>
            </table>
          </div>
        
        </div>
        
        <!-- Modal footer -->
        
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function(){
 
    $("#myModal").modal();
  
    });
  </script>
  <?php
            }

            
        }
    }
    else
    {
        $sql="SELECT * FROM car WHERE car_no='$no'";
        if($res=mysqli_query($con,$sql))
        {
            $row=mysqli_fetch_array($res);
            $tid=$row['track_id'];
            $sql1="SELECT date FROM qrcode WHERE track_id='$tid'";
            if($res1=mysqli_query($con,$sql1))
            {
                $row1=mysqli_fetch_array($res1);
                ?>
                <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title "><center><i>KEC-VPMS</i></center></h4>
          <a href="pass_verification.php"> <button type="button" class="close" >&times;</button></a>
        </div>
        
          <h4 ><center><i>Vehicle Details</i></center></h4>
          
        
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-bordered">
                <tr><td>Name</td><td><?php echo $row['name']; ?></td></tr>
                <tr><td>Roll No</td><td><?php echo $row['roll_no']; ?></td></tr>
                <tr><td>Department</td><td><?php echo $row['department']; ?></td></tr>
                <tr><td>Vehicle No</td><td><?php echo $row['car_no']; ?></td></tr>
                <tr><td>Mobile</td><td><?php echo $row['mobile']; ?></td></tr>
                <tr><td>Approved on</td><td><?php echo $row1['date']; ?></td></tr>
                <tr><td>Status</td><?php if($row['status']=="Approved"){ 
                    ?>
                    <td style="color:green"><?php 
                    echo $row['status']; 
                    ?></td><?php 
                } 
                else 
                    { ?>
                        <td style="color:red"><?php echo $row['status']; ?></td><?php } ?> </tr>
            </table>
          </div>
        
        </div>
        
        <!-- Modal footer -->
       
        
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function(){
 
    $("#myModal").modal();
  
    });
  </script>
  <?php
            }

            
        }
    }

    ?>
    </body></html>

