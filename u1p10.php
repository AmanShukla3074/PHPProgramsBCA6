<?php
// Example array
$array = array(2, 5, 3, 6, 2, 7, 2, 8, 2);

// Value to count occurrences for
$valueToCount = 2;

// Count occurrences of the value
$count = 0;
foreach ($array as $element) {
    if ($element === $valueToCount) {
        $count++;
    }
}

// Output the result
echo "The value $valueToCount appears $count times in the array.";

/*
<?php
$myArray=array(9,34,12,9,10,5,9,56,11,9,10,6);
$valuetocount=9;
$totalcount=0; for($i=0;$i<=11;$i++)
{
if ($myArray[$i] == $valuetocount)
{
$totalcount++;
}
}
echo "Total $valuetocount in Array is $totalcount times";
?>
*/
?>

