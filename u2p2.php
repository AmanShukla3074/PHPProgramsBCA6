<?php
//2.Write a PHP script for that creates a database named "DB-1"in MySQL.
$con=mysqli_connect("localhost","root","");
if(!$con)
		die("couldn't connect".mysqli_connect_error());
echo "connected";

$query=mysqli_query($con,"Create Database DB_1");

if($query)
	echo"DB created";
else
	echo "no cretaed".mysqli_error($con);
mysqli_close($con);
?>