<?php
/*6. Create a form contaning two input fields (Pro_id, QOH) and Update button. When the
user clicks on the Update button the quantity of the Pro_id specified should get updated
using a PHP script.*/
$p_id=$_POST["v1"];
$p_qoh=$_POST["v2"];
$con=mysqli_connect("localhost","root","","db_1");
if(!$con)
	die("couldent connect".mysqli_connect_errno());
echo "connected<br>";

$qry=mysqli_query($con,"update product set QOH=".$p_qoh." where Pro_id =".$p_id );
$res=mysqli_affected_rows($con);
if($res==1)
{
	echo "upadted";
}
else
{
	echo "no upadted";
}

mysqli_close($con);
?>