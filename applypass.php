<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
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
<body>
        <?php include 'header.php'; ?>
        <br/>
        <div class="container " >
            <h3 class="text-center"><i>Entry Pass for Students/Faculty</i></h3><br/>
        <div class="card-deck">
            <div class="card bg-primary">
            <div class="card-body text-center">
                
                            <p align="center"><a href="#" style="text-decoration:none" data-toggle="modal" data-target="#myModal-one"><img src="images/bike1.png" style="text-decoration: none;color:white"></p>
                            <p align="center" style="color:white">Two Wheeler</p></a>
                </div>
            </div>
            <div class="modal fade" id="myModal-one" role="dialog">
            <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Enter Your Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
                </div>
                <div class="modal-body">
                    
                
                <p><form class="form-horizontal" name="frm"  action="bikeapp.php" method="POST" onsubmit="$('#loading').show();" enctype="multipart/form-data">
                <table  align="center" class="table">
                    
                <tr><td>
                        Name:
                    <input type="text" id="input" name="name" style="width:100%;" pattern="[A-Za-z ]{4,30}" title="less than 30 characters" placeholder="Name" class="form-control" required>
                    
                </td>
                    </tr>
                
                        <tr><td>
                        Designation:
                    <select name="desig" class="form-control">
                    
                        <option>Student</option>
                        <option>Faculty</option>
                        <option>Others</option>
                        
                    </select>
                    
                </td>
                    </tr>
                            
                    <tr><td>
                        Roll No:

                    <input type="text" id="input" name="rno" pattern="[A-Za-z0-9]{8,15}" title="less than 15 characters" style="width:100%;"  placeholder="Roll No" class="form-control" required>
                    
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
                    <tr><td align="center">
                        Bike Model:
                    <input type="text" id="input" name="bmodel" pattern="[A-Za-z0-9]{0,30}" title="less than 30 characters" style="width:100%;" placeholder="Bike Model" class="form-control" required>
                    Eg:Pulsar 200
                </td>
                    </tr>
                    <tr><td align="center">
                        Bike No:
                    <input type="text" id="input" name="bno"  pattern="[A-Z]{2}\s[0-9]{2}\s[A-Z]{0,2}\s[0-9]{4}" title="Not in Specified Format" style="width:100%;" placeholder="Bike No" class="form-control" required>
                    Eg:TN 00 A 0000 or TN 00 AA 0000
                </td>
                    </tr>
                    <tr><td>
                    Driving License(Upload in .pdf Format)
                    <input type="file" id="input" name="license" style="width:100%;" accept=".pdf" class="form-control" required>
                    
                </td>
                    </tr>
                    <tr><td >
                    Driving License Expiry Date:
                    <input type="date" id="input" name="ble"  style="width:100%;" placeholder="Driving License Expiry Date" class="form-control" required>
                    
                </td>
                    </tr>
                    <tr><td>
                    RC Book(Upload in .pdf Format)
                    <input type="file" id="input" name="rcno" style="width:100%;" accept=".pdf" class="form-control" required>
                    
                </td>
                    </tr>
                        <tr><td>
                    Vehicle Insurance(Upload in .pdf Format)
                    <input type="file" id="input" name="ins" style="width:100%;" accept=".pdf" class="form-control" required>
                    
                </td>
                    </tr>
                    <tr><td >
                    Vehicle Insurance Expiry Date:
                    <input type="date" id="input" name="bie"  style="width:100%;" placeholder="Driving License Expiry Date" class="form-control" required>
                    
                </td>
                    </tr>
                    <tr><td>
                    ID Card(Upload in .pdf Format)
                    <input type="file" id="input" name="idcard" style="width:100%;" accept=".pdf" class="form-control" required>
                    
                </td>
                    </tr>
                    <tr><td>
                        Mobile No:
                    <input type="text" id="input" name="mno" pattern="[0-9]{10}" title="Invalid Mobile No" style="width:100%;" placeholder="Mobile No" class="form-control" required>
                    
                </td>
                    </tr>
                    <tr><td>
                        Email ID:
                    <input type="email" id="input" name="email" pattern="([a-zA-Z]+[0-9]*)+([_]?[a-zA-z0-9]+)*[@]{1}[a-z]+([.]{1}[a-z]{2,3})+" title="Invalid Email" style="width:100%;" placeholder="Email" class="form-control" required>
                    
                </td>
                    </tr>
                    <tr><td align="center">
                    <p align="center" style="color:red"><b>Note:</b>TRACK ID will be sent to your given Email ID.</p>
                </td></tr>
                    <tr><td  align="center"><input type="submit" name="submit" id="submit" class="btn btn-danger" value="Apply">
                    <div class="spinner-border" id="loading" style="display:none"></div>
                </td></tr>
                </table>
            </form></p>
                    </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            
            </div>
        </div>
            <div class="card bg-danger">
            <div class="card-body text-center">
                            
                            <p align="center"><a href="#" style="text-decoration:none" data-toggle="modal" data-target="#myModal"><img src="images/cars1.png" style="text-decoration: none;color:white"></p>
                            <p align="center" style="color:white">Four Wheeler</p></a>
                            </div>
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Enter Your Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
                </div>
                <div class="modal-body">
                    
                <p><form class="form-horizontal" name="frm1"  action="carapp.php" method="POST"  onsubmit="$('#loading1').show();" enctype="multipart/form-data">
                <table  align="center" class="table">
                    
                
                
                        <tr><td>
                        Name:
                    <input type="text" id="input" name="name" style="width:100%;" pattern="[A-Za-z ]{4,30}" title="less than 30 characters" placeholder="Name" class="form-control" required>
                    
                </td>
                    </tr>
                    <tr><td>
                        
                    <input type="text" id="input" name="rno" style="width:100%;" pattern="[A-Za-z0-9]{8,15}" title="less than 15 characters" placeholder="Roll No" class="form-control" required>
                    
                </td>
                    </tr>
                    <tr><td>
                        Designation:
                    <select name="user" class="form-control">
                    
                        <option>Student</option>
                        <option>Faculty</option>
                        <option>Others</option>
                        
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
                    <tr><td align="center">
                        Car Model:
                    <input type="text" id="input" name="cmodel" style="width:100%;" placeholder="Car Model" pattern="[A-Za-z0-9 ]{0,30}" title="less than 30 characters" class="form-control" required>
                    Eg:Hyundai i20
                </td>
                    </tr>
                    <tr><td align="center">
                        Car No:
                    <input type="text" id="input" name="cno" style="width:100%;" pattern="[A-Z]{2}\s[0-9]{2}\s[A-Z]{0,2}\s[0-9]{4}" title="Not in Specified Format" placeholder="Car No" class="form-control" required>
                    Eg:TN 00 A 0000 or TN 00 AA 0000
                </td>
                    </tr>
                    <tr><td>
                    Driving License(Upload in .pdf Format)
                    <input type="file" id="input" name="license" style="width:100%;" accept=".pdf" class="form-control" required>
                    
                </td>
                    </tr>
                    <tr><td >
                    Driving License Expiry Date:
                    <input type="date" id="input" name="cle"  style="width:100%;" placeholder="Driving License Expiry Date" class="form-control" required>
                    
                </td>
                    </tr>
                    <tr><td>
                    RC Book(Upload in .pdf Format)
                    <input type="file" id="input" name="rcno" style="width:100%;" accept=".pdf" class="form-control" required>
                    
                </td>
                    </tr>
                        <tr><td>
                Vehicle Insurance(Upload in .pdf Format)
                    <input type="file" id="input" name="ins" style="width:100%;" accept=".pdf" class="form-control" required>
                    
                </td>
                    </tr>
                    <tr><td >
                    Vehicle Insurance Expiry Date:
                    <input type="date" id="input" name="cie"  style="width:100%;" placeholder="Driving License Expiry Date" class="form-control" required>
                    
                </td>
                    </tr>
                    <tr><td>
                    ID Card(Upload in .pdf Format)
                    <input type="file" id="input" name="idcard" style="width:100%;" accept=".pdf" class="form-control" required>
                    
                </td>
                    </tr>
                    <tr><td>
                        Mobile No:
                    <input type="text" id="input" name="mno" style="width:100%;" pattern="[0-9]{10}" title="Invalid Mobile No" placeholder="Mobile No" class="form-control" required>
                    
                </td>
                    </tr>
                    <tr><td>
                        Email ID:
                    <input type="email" id="input" name="email"  pattern="([a-zA-Z]+[0-9]*)+([_]?[a-zA-z0-9]+)*[@]{1}[a-z]+([.]{1}[a-z]{2,3})+" title="Invalid Email" style="width:100%;" placeholder="Email" class="form-control" required>
                    
                </td>
                    </tr>
                    <tr><td align="center">
                    <p align="center" style="color:red"><b>Note:</b>TRACK ID will be sent to your given Email ID.</p>
                </td></tr>
                    <tr><td  align="center"><input type="submit" name="submit" id="submit1" class="btn btn-danger" value="Apply">
                    <div class="spinner-border" id="loading1" style="display:none"></div>
                </td></tr>
                </table>
            </form></p>
            
        
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            
            </div>
        </div><br>
            
</body>
</html>
