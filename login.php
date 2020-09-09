<?php
session_start();

   


if(!isset($_SESSION['key'])){
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
          <a href="index.php"> <button type="button" class="close" >&times;</button></a>
        </div>
        
          <h4 ><center><i>Admin Login</i></center></h4>
          
        
        
        <!-- Modal body -->
        <div class="modal-body">
          <form name="login" method="POST" action="auth.php" autocomplete="off">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="form-group" style="text-align: center">
            <input type="submit" value="Login" name="submit" class="btn btn-primary">
          </div>
        </form>
        
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
    header('location:index.php');
}
?>