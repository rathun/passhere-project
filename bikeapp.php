<?php
	include 'db.php';
// 	$sql="SELECT count FROM counter WHERE type='bike'";
// 	if($res=mysqli_query($con,$sql))
// 		while($row=mysqli_fetch_array($res))
// 			$id=$row['count']+1;
	$name=$_POST['name'];
	$desig=$_POST['desig'];
	$rno=$_POST['rno'];
	$depart=$_POST['depart'];
	$bmodel=$_POST['bmodel'];
	$mno=$_POST['mno'];
	$email=$_POST['email'];
	$ble=$_POST['ble'];
	$bie=$_POST['bie'];
	// $license=$_POST['license'];
	// $rcno=$_POST['rcno'];
	$bno=$_POST['bno'];
	
	$n=rand();
	$i=0;
	$filetmp=$_FILES["license"]["tmp_name"];
    $filepath="Files/License/BL".$n.".pdf";
     $file_type=$_FILES['license']['type'];
     if($file_type=="application/pdf")
     {
	    $bl="BL".$n.".pdf";
	    $i++;
     }
	else
	{
	    ?><script>alert("Driving License Not in pdf Format.");</script><?php
	}
	move_uploaded_file($filetmp,$filepath);
	
	$filetmp1=$_FILES["rcno"]["tmp_name"];
    $filepath1="Files/RCBook/BR".$n.".pdf";
	
	$file_type1=$_FILES['rcno']['type'];
	if($file_type1=="application/pdf")
	{
	    $br="BR".$n.".pdf";
	    $i++;
	}
	else
	{
	    ?><script>alert("RC Book Not in pdf Format.");</script><?php
	}
	    move_uploaded_file($filetmp1,$filepath1);
	$filetmp=$_FILES["ins"]["tmp_name"];
    $filepath="Files/Insurance/BI".$n.".pdf";
     $file_type2=$_FILES['ins']['type'];
	if($file_type2=="application/pdf")
	{
	    $bins="BI".$n.".pdf";
	    $i++;
	}
	else
	{
	    ?><script>alert("Insurance Not in pdf Format.");</script><?php
	}
    	move_uploaded_file($filetmp,$filepath);
	$filetmp=$_FILES["idcard"]["tmp_name"];
    $filepath="Files/Id_Card/BIC".$n.".pdf";
     $file_type3=$_FILES['idcard']['type'];
	if($file_type3=="application/pdf")
	{
	    $bidcard="BIC".$n.".pdf";
	    $i++;
	}
	else
	{
	    ?><script>alert("Id Card Not in pdf Format.");</script><?php
	}
	move_uploaded_file($filetmp,$filepath);
	
	$id1="B".$n;
	$id2="Your Track ID is ".$id1;
	if($i==4)
	{
	$sql1="INSERT INTO bike VALUES('$id1','$name','$desig','$rno','$depart','$bmodel','$bno','$bl','$ble','$br','$bins','$bie','$bidcard','$mno','$email','0','Applied')";
	if(mysqli_query($con,$sql1))
	{	
	    $to = $email;
        $subject = "Application Track ID";
        $message = "Your Application Track Id:".$id1;
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <passhere2019@gmail.com>' . "\r\n";
        mail($to,$subject,$message,$headers);
		$sql2="UPDATE counter SET count=count+1 WHERE type='bike'";
		if(!mysqli_query($con,$sql2))
			echo mysqli_error($con);
		?>
		<script type="text/javascript">
			alert("Applied Successfully");
			alert("<?php echo $id2; ?>");
			location.replace("index.php");
		</script>
		<?php
	}
	else
	{
		echo mysqli_error($con);
	}
	}
	else
	{
	    ?><script>location.replace("applypass.php");</script><?php
	}
	mysqli_close($con);
?>