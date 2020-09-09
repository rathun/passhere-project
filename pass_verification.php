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
    <?php include 'header.php'; ?>
    <br/>
    <div class="container">
        
        <div class="card" >
            <br/>
            
            <div class="d-flex justify-content-center" style="width:100%">
                <form action="pass_verify.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    <label>Select the Type of Vehicle:</label>
                    <select class="form-control" name="type">
                        <option value="Bike">Two Wheeler</option>
                        <option value="Car">Four Wheeler</option>
                    </select>
                    </div><br/>
                    <div class="form-group">
                    <label>Enter the Vehicle No:</label>
                    <input type="text" name="no"  class="form-control">
                    </div><br/>
                     <div class="form-group">
                    <input type="submit" class="btn btn-md btn-block btn-success" value="Get Status">
                </div>
                </form>
            </div>
            <br/>
            </div>
            
    </div>
    
</body>
</html>