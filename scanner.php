<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pass Verification</title>
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
<body >
    <div class="container">
        <div><img src="Image/header.jpg" width=100%></div><br>
        <div class="card" >
            <h1 align="center"><i>Enter your Vehicle No</i></h1><br>
            <div class="d-flex justify-content-center" style="width:100%">
                <form action="status.php" method="get" enctype="multipart/form-data">
                    <input type="text" name="id"  class="form-control"><br>
                    <input type="submit" class="btn btn-md btn-block btn-success" value="Get Status">
                </form>
            </div>
            </div>
            
    </div>
    
</body>
</html>