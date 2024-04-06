<?php

/*4.Create an array named $sub, assign five elements to it and display the elements
assigned using for loop and foreach statement.*/

// Create an array named $sub and assign five elements to it
$sub = array("Math", "Science", "History", "English", "Art");

// Displaying elements assigned using a for loop
echo "Using for loop:<br>";
$length = count($sub);
for ($i = 0; $i < $length; $i++) {
    echo "Element at index $i: " . $sub[$i] . "<br>";
}

// Displaying elements assigned using a foreach statement
echo "<br>Using foreach statement:<br>";
foreach ($sub as $key => $value) {
    echo "Element at index $key: $value<br>";
}
?>
