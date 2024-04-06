<?php
/*4.Create a form contaning four input fields(Pro_id, Pro_name, Pro_price, QOH) and
Submit button. When the user clicks on the submit button an PHP script should be
executed which inserts the record in the product table.*/
$p_id=$_POST["v1"];
$p_name=$_POST["v2"];
$p_price=$_POST["v3"];
$p_qoh=$_POST["v4"];

$con=mysqli_connect("localhost","root","AmanRoot2004","db_1");
if(!$con)
	die("couldent connect".mysqli_connect_errno());
echo "connected";

$qry=mysqli_query($con,"Insert into product values ( $p_id , '$p_name' , $p_price , $p_qoh)");
$res=mysqli_affected_rows($con);

if($res==1)
	echo "inserted";
else
	echo "no inserted";
mysqli_close($con);
?>