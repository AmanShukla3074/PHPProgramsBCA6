<?php
// Function to check if a number is an Armstrong number
function check_num($num1)
{
    // Initialize total to store the sum of cubes of digits
    $total = 0;
    $x = $num1;

    // Loop to calculate the sum of cubes of digits
    while ($x != 0) {
        // Extract the last digit
        $rem = $x % 10;
        // Add the cube of the digit to total
        $total = $total + $rem * $rem * $rem;
        // Remove the last digit
        $x = $x / 10;
    }

    // Check if the original number is equal to the total sum of cubes of its digits
    if ($num1 == $total) {
        echo "Yes, it is an Armstrong number";
    } else {
        echo "No, it is not an Armstrong number";
    }
}

// Retrieve the value of num1 from the POST request
$num1 = $_POST["n1"];

// Call the check_num function with num1 as argument
$result = check_num($num1);




/*

code explain with non Armstrong num:

$num1 = 123;
$x = 123;
$total = 0;

// Iteration 1:
$rem = $x % 10; // $rem = 123 % 10 = 3
$total = $total + $rem * $rem * $rem; // $total = 0 + 3*3*3 = 27
$x = $x / 10; // $x = 123 / 10 = 12 (integer division)

// Iteration 2:
$rem = $x % 10; // $rem = 12 % 10 = 2
$total = $total + $rem * $rem * $rem; // $total = 27 + 2*2*2 = 27 + 8 = 35
$x = $x / 10; // $x = 12 / 10 = 1 (integer division)

// Iteration 3:
$rem = $x % 10; // $rem = 1 % 10 = 1
$total = $total + $rem * $rem * $rem; // $total = 35 + 1*1*1 = 35 + 1 = 36
$x = $x / 10; // $x = 1 / 10 = 0 (integer division)

// Since $x becomes 0, the loop stops

// Now, $total is 36
// Since $num1 (123) is not equal to $total (36), it's not an Armstrong number



with Armstrong num:

$num1 = 153;
$x = 153;
$total = 0;

// Iteration 1:
$rem = $x % 10; // $rem = 153 % 10 = 3
$total = $total + $rem * $rem * $rem; // $total = 0 + 3*3*3 = 27
$x = $x / 10; // $x = 153 / 10 = 15 (integer division)

// Iteration 2:
$rem = $x % 10; // $rem = 15 % 10 = 5
$total = $total + $rem * $rem * $rem; // $total = 27 + 5*5*5 = 27 + 125 = 152
$x = $x / 10; // $x = 15 / 10 = 1 (integer division)

// Iteration 3:
$rem = $x % 10; // $rem = 1 % 10 = 1
$total = $total + $rem * $rem * $rem; // $total = 152 + 1*1*1 = 152 + 1 = 153
$x = $x / 10; // $x = 1 / 10 = 0 (integer division)

// Since $x becomes 0, the loop stops

// Now, $total is 153
// Since $num1 (153) is equal to $total (153), it's an Armstrong number


*/
?>
