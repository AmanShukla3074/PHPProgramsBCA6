<?php
/*7.Create two functions in PHP, parameterized and non parameterized for implementing
string concatenation operation.*/
string concatenation operation.*/
// Non-parameterized function for string concatenation
function concatenateStrings() {
    $str1 = "Hello";
    $str2 = "World";
    $result = $str1 . " " . $str2;
    echo $result;
}

// Parameterized function for string concatenation
function concatenateStringsParam($str1, $str2) {
    $result = $str1 . " " . $str2;
    return $result;
}

// Calling the non-parameterized function
echo "Non-parameterized function output: ";
concatenateStrings();
echo "<br>";

// Calling the parameterized function
$string1 = "Hello";
$string2 = "World";
echo "Parameterized function output: " . concatenateStringsParam($string1, $string2);
?>
