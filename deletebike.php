<?php
include 'db.php';
$id=$_POST['tid']
$sql="UPDATE bike SET status='Rejected' WHERE track_id='$id'";
if(!mysqli_query($con,$sql))
{
	echo mysqli_error($con);
}
else
{
	?><script type="text/javascript">
		alert("Rejected Successfully");
		location.replace("bikepending.php");
	</script><?php
}
mysqli_close($con);
?>