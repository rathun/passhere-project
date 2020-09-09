<div id="mySidenav" class="sidenav bg-dark">
            <button class="closebtn btn"  onclick="closeNav()">&times;</button>
            <?php
            if(isset($_SESSION['name']))
            {
                ?><a href="#" id="login"><i class="fa fa-user"></i>&nbsp;<?php echo "Welcome,".$_SESSION['name']; ?></a>
                <a href="home.php"><i class="fa fa-home"></i>&nbsp;Home</a>
                <a href="bike_home.php"><i class="fa fa-motorcycle"></i>&nbsp;Two Wheelers</a>
                <a href="car_home.php"><i class="fa fa-car"></i>&nbsp;Car Wheelers</a>
                <?php
            }
            else
            {
            ?>
            <a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a>
            <!-- <a href="#"><i class="fa fa-drivers-license"></i>&nbsp;Entry Pass for Visiters</a> -->
            <a href="applypass.php"><i class="fa fa-drivers-license"></i>&nbsp;Entry Pass for Students/Faculty</a>
            <a href="#" data-toggle="modal" data-target="#track_modal"><i class="fa fa-search" ></i>&nbsp;Track your Application</a>
            <a href="pass_verification.php"><i class="fa fa-qrcode"></i>&nbsp;Pass Verification</a>
            <a href="login.php"><i class="fa fa-sign-in"></i>&nbsp;Admin Login</a>
            <a href="developer.php"><i class="fa fa-address-book"></i>&nbsp;Development Team</a>
            <?php
            }
            if(isset($_SESSION['desig'])) 
                if($_SESSION['desig']!="HOD" && $_SESSION['desig']!="Faculty")
                { ?>
                    <a  href="newuser_form.php" ><i class="fa fa-user"></i>&nbsp;New User</a>
                <?php } 
            if(isset($_SESSION['name']))
            {
                ?><a href="logout.php"><i class="fa fa-sign-out"></i>&nbsp;Logout</a><?php
            }
            ?>
            
</div>
<div class="sticky-top">
<nav class="navbar navbar-dark bg-dark " >
    <div class="text-left"><a  onclick="openNav()" style="cursor:pointer;color:white;"><img src="images/menu.png" width="50px"></a>&nbsp;<img src="images/logo.png" width="40px" height="50px">&nbsp;KEC-VPMS</div>
    <div class="login">
    <?php
    if(isset($_SESSION['name']))
    {
        ?><a href="#"><i class="fa fa-user"></i>&nbsp;<?php echo "Welcome,".$_SESSION['name']; ?></a><?php
    }
    ?>
    </div>
    </nav>
    <marquee class="alert-warning"><i>This is under Testing,not Launched!</i></marquee>
</div>

<div class="modal fade" id="track_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Enter Your Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p><form class="form-horizontal" id="frm"  action="biketrack.php" method="POST" onsubmit="$('#track_load').show();"   enctype="multipart/form-data">
    <table  class="table" style="background-color:white" width=100% align="center"  >
      
    
    
        <tr><td width=100% align="center">
            
            <input type="text" id="input" name="tid" class="form-control" width=100% placeholder="Track ID" required>
              
        </td>
      </tr>
      <tr><td  align="center"><input type="submit" name="submit" id="submit" class="btn btn-danger" value="Track"> 
      <div id="track_load" style="display:none;" class="spinner-border"></div></td>
</tr>
    </table></form></p>
    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
 
</div>



<div class="modal fade" id="enrtypass_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Enter Your Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p><form class="form-horizontal" id="frm"  action="biketrack.php" method="POST" onsubmit="$('#entrypass_load').show();"   enctype="multipart/form-data">
    <table  class="table" style="background-color:white" width=100% align="center"  >
      
    
    
        <tr><td width=100% align="center">
            
            <input type="text" id="input" name="tid" class="form-control" width=100% placeholder="Track ID" required>
              
        </td>
      </tr>
      <tr><td  align="center"><input type="submit" name="submit" id="submit" class="btn btn-danger" value="Track"> 
      <div id="entrypass_load" style="display:none;" class="spinner-border"></div></td>
</tr>
    </table></form></p>
    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
 
</div>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }
    
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>