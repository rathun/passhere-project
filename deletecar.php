<?php
include 'db.php';
$id=$_POST['tid'];
$sql="UPDATE car SET status='Rejected' WHERE track_id='$id'";
if(!mysqli_query($con,$sql))
{
	echo mysqli_error($con);
}
else
{
	?><script type="text/javascript">
		alert("Rejected Successfully");
		location.replace("carpending.php");
	</script><?php
}
mysqli_close($con);
?>