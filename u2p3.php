<?php
/*
3.Write a PHP script for creating a product table in the specified database with fields
Pro_id, Pro_name, Pro_price, QOH. Also display an acknowledgement for the same.
*/
$con=mysqli_connect("localhost","root","AmanRoot2004","db_1");
if(!$con)
		die("couldn't connect".mysqli_connect_error());
echo "connected";

$query=mysqli_query($con,"Create table product
(Pro_id int,
pro_name varchar(20),
pro_price int,
QOH int,
PRIMARY KEY(Pro_id)
)
");

if($query)
	echo"Table created";
else
	echo "no cretaed".mysqli_error($con);
mysqli_close($con);
?>