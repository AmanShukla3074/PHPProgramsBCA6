<?php
/*
9.Write a program in PHP to sort the array of given 5 numbers in ascending and
descending order.
*/
// Define an array of 5 numbers
$numbers = array(8, 3, 5, 1, 9);

// Sorting the array in ascending order using sort() function
sort($numbers);
echo "Array sorted in ascending order using sort() function: ";
foreach ($numbers as $num) {
    echo $num . " ";
}
echo "<br>";

// Sorting the array in descending order using rsort() function
rsort($numbers);
echo "Array sorted in descending order using rsort() function: ";
foreach ($numbers as $num) {
    echo $num . " ";
}
echo "<br>";

// Sorting the array in ascending order using manual logic
for ($i = 0; $i < count($numbers); $i++) {
    for ($j = $i + 1; $j < count($numbers); $j++) {
        if ($numbers[$i] > $numbers[$j]) {
            // Swap numbers
            $temp = $numbers[$i];
            $numbers[$i] = $numbers[$j];
            $numbers[$j] = $temp;
        }
    }
}
echo "Array sorted in ascending order using manual logic: ";
foreach ($numbers as $num) {
    echo $num . " ";
}
echo "<br>";

// Sorting the array in descending order using manual logic
for ($i = 0; $i < count($numbers); $i++) {
    for ($j = $i + 1; $j < count($numbers); $j++) {
        if ($numbers[$i] < $numbers[$j]) {
            // Swap numbers
            $temp = $numbers[$i];
            $numbers[$i] = $numbers[$j];
            $numbers[$j] = $temp;
        }
    }
}
echo "Array sorted in descending order using manual logic: ";
foreach ($numbers as $num) {
    echo $num . " ";
}
?>
