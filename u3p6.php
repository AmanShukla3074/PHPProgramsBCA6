<?php

$str=$_GET["q"];
$strl=strlen($str);

if($strl == 0)
	echo "Enter A string";
else if ($strl < 5)
	echo "Enter A string with min 5 char";
else
	echo "your str in $str";
?>