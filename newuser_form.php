<?php
session_start();

   


if(isset($_SESSION['key']) && $_SESSION['key']==1){
   //header('location:login.php');
?>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"  crossorigin="anonymous">
  <script>
    window.oncontextmenu = function () {
        console.log("Right Click Disabled");
        return false;
    }
</script>
  
  
</head>
<body style=" background-color: #33ccff">
   
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title "><center><i>KEC-VPMS</i></center></h4>
         <a href="home.php"> <button type="button" class="close" >&times;</button></a>
        </div>
        
          <h4 ><center><i>Login</i></center></h4>
          
        
        
        <!-- Modal body -->
        <div class="modal-body">
          <form name="login" method="POST" action="newuser.php" autocomplete="off">
         <table  align="center" class="table">
            
        <tr><td>
                Name:
            <input type="text" id="input" name="name" style="width:100%;" pattern="[A-Za-z ]{4,30}" title="less than 30 characters" placeholder="Name" class="form-control" required>
              
        </td>
            </tr>
        
                <tr><td>
                Designation:
            <select name="desig" class="form-control">
               
                <option>HOD</option>
                <option>Faculty</option>
                
                
            </select>
              
        </td>
            </tr>
            <tr><td>
                Department:
                <select name="depart" class="form-control">
             <?php
                include 'db.php';
                $sql="SELECT * FROM department";
                if($res=mysqli_query($con,$sql))
                {
                    while($row=mysqli_fetch_array($res))
                    {
                        ?><option><?php echo $row['department']; ?></option><?php
                    }
                }
                
                ?>
             
        </td>
            </tr>
            <tr><td>
                UserName:
            <input type="text" id="input" name="username" style="width:100%;"  placeholder="UserName" class="form-control" required>
              
        </td>
            </tr>
            <tr><td>
               Password:
            <input type="password" id="input" name="password" style="width:100%;"  placeholder="Password" class="form-control" required>
              
        </td>
            </tr>
            <tr><td  align="center"><input type="submit" name="submit" id="submit" class="btn btn-success" value="Create">
        
        </td></tr>
        </table>
        </form>
        
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
         <a href="home.php"> <button type="button" class="btn btn-danger">Close</button></a>
        </div>
        
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function(){
 
    $("#myModal").modal();
    $("#myModal").click(function(){
    $("#myModal").modal({
            backdrop: 'static',
            keyboard: false
        });
    });
  
});
  </script>
</body>
</html>
<?php
}
else
{
    header('location:home.php');
}
?>