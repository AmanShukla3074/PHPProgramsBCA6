<?php
/*7.Create a form contaning one input field(Pro_id) and a Delete button. When the user
clicks on the Delete button a PHP script should get executed and should delete the
record of the product for the Pro_id specified.
*/
$p_id=$_POST["v1"];

$con=mysqli_connect("localhost","root","","db_1");
if(!$con)
	die("coulnt connect".mysqli_connect_error());
echo "conneced<br>";

$qry=mysqli_query($con,"delete from product where Pro_id=".$p_id);
$res=mysqli_affected_rows($con);

if($res==1)
	echo "deleted";
else
	echo "no del";
mysqli_close($con);
?>