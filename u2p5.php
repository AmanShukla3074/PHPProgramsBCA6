<?php
/*5.Create a form contaning one input field(Pro_id) and a search button. When the user
clicks on the Search button a PHP script should get executed and should display the
details of the product for the Pro_id specified.*/
$p_id=$_POST["v1"];

$con=mysqli_connect("localhost","root","AmanRoot2004","db_1");
if(!$con)
	die("couldent connect".mysqli_connect_errno());
echo "connected<br>";

$qry=mysqli_query($con,"Select * from product where Pro_id =".$p_id );

if(mysqli_num_rows($qry)>0)
{
	while($row=mysqli_fetch_array($qry))
	{
		echo "pro_id: {$row['Pro_id']}<br>".
		"pro_name: {$row['pro_name']}<br>".
		"pro_price: {$row['pro_price']}<br>".
		"QOH: {$row['QOH']}<br>";
	}
}
else
{
	echo "no rec";
}

mysqli_close($con);
?>