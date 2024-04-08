<?php
// Define a function to check if the sum of three numbers is prime
function check_prime($num1, $num2, $num3)
{
    // Calculate the sum of the three numbers
    $sum = $num1 + $num2 + $num3;

    // If the sum is 1, it's not considered prime, so return 0
    if ($sum == 1) {
        return 0;
    }

    // Loop through numbers from 2 to half of the sum
    for ($i = 2; $i <= $sum / 2; $i++) {
        // Check if the sum is divisible by the current number
        if ($sum % $i == 0) {
            // If the sum is divisible by the current number, it's not prime, so return 0
            return 0;
        }
    }
    // If no divisor is found, the sum is prime, so return 1
    return 1;
}

// Retrieve the values of num1, num2, and num3 from the POST request
$num1 = $_POST["n1"];
$num2 = $_POST["n2"];
$num3 = $_POST["n3"];

// Calculate the sum of the three numbers
$sum = $num1 + $num2 + $num3;

// Call the check_prime function to check if the sum is prime
$flag_value = check_prime($num1, $num2, $num3);

// Display the result based on whether the sum is prime or not
if ($flag_value == 1) {
    echo "sum = " . $sum . "<br> It is prime number";
} else {
    echo "sum = " . $sum . "<br> It is non-prime number";
}
?>
