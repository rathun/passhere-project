<?php
	include 'db.php';
// 	$sql="SELECT count FROM counter WHERE type='car'";
// 	if($res=mysqli_query($con,$sql))
// 		while($row=mysqli_fetch_array($res))
// 			$id=$row['count']+1;
	$name=$_POST['name'];
	$rno=$_POST['rno'];
	$desig=$_POST['user'];
	$depart=$_POST['depart'];
	$cmodel=$_POST['cmodel'];
	$mno=$_POST['mno'];
	$email=$_POST['email'];
	$cie=$_POST['cie'];
	$cle=$_POST['cle'];
	// $license=$_POST['license'];
	// $rcno=$_POST['rcno'];
	$cno=$_POST['cno'];
	$n=rand();
$i=0;
	$filetmp=$_FILES["license"]["tmp_name"];
    $filepath="Files/License/CL".$n.".pdf";
     $file_type=$_FILES['license']['type'];
     if($file_type=="application/pdf")
     {
	    $cl="CL".$n.".pdf";
	    $i++;
     }
	else
	{
	    ?><script>alert("Driving License Not in pdf Format.");</script><?php
	}
	move_uploaded_file($filetmp,$filepath);
	
	$filetmp1=$_FILES["rcno"]["tmp_name"];
    $filepath1="Files/RCBook/CR".$n.".pdf";
	
	$file_type1=$_FILES['rcno']['type'];
	if($file_type1=="application/pdf")
	{
	    $cr="CR".$n.".pdf";
	    $i++;
	}
	else
	{
	    ?><script>alert("RC Book Not in pdf Format.");</script><?php
	}
	    move_uploaded_file($filetmp1,$filepath1);
	$filetmp=$_FILES["ins"]["tmp_name"];
    $filepath="Files/Insurance/CI".$n.".pdf";
     $file_type2=$_FILES['ins']['type'];
	if($file_type2=="application/pdf")
	{
	    $cins="CI".$n.".pdf";
	    $i++;
	}
	else
	{
	    ?><script>alert("Insurance Not in pdf Format.");</script><?php
	}
    	move_uploaded_file($filetmp,$filepath);
	$filetmp=$_FILES["idcard"]["tmp_name"];
    $filepath="Files/Id_Card/CIC".$n.".pdf";
     $file_type3=$_FILES['idcard']['type'];
	if($file_type3=="application/pdf")
	{
	    $cidcard="CIC".$n.".pdf";
	    $i++;
	}
	else
	{
	    ?><script>alert("Id Card Not in pdf Format.");</script><?php
	}
	move_uploaded_file($filetmp,$filepath);
	
	$id1="C".$n;
	$id2="Your Track ID is ".$id1;
	if($i==4)
	{
	$sql1="INSERT INTO car VALUES('$id1','$name','$desig','$rno','$depart','$cmodel','$cno','$cl','$cle','$cr','$cins','$cie','$cidcard','$mno','$email','0','Applied')";
	if(mysqli_query($con,$sql1))
	{	
	     $to = $email;
        $subject = "Application Track ID";
        $message = "Your Application Track Id:".$id1;
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <passhere2019@gmail.com>' . "\r\n";
        mail($to,$subject,$message,$headers);
		$sql2="UPDATE counter SET count=count+1 WHERE type='car'";
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