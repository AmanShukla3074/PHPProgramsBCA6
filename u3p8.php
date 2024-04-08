<?php

$sid=$_GET["v1"];
$sn=$_GET["v2"];
$sm=$_GET["v3"];
$sc=$_GET["v4"];

$con=mysqli_connect("localhost","root","AmanRoot2004","db_1");
if(!$con)
	die("couldnt connect".mysqli_connect_error());

$qry=mysqli_query($con,'select * from student where studid='.$sid);
if(mysqli_affected_rows($con)>0)
	echo "User Already Exit. Try another stuId";
else
{
	$qry1=mysqli_query($con,"insert into student values ($sid,'$sn',$sm,'$sc');");
	if(mysqli_affected_rows($con)>0)
		echo "inserted";
	else
		echo "not inserted";
}

mysqli_close($con);


?>