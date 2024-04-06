<?php
/*5.Create an array named $student, that sores 5 element bounded to a different keys and
access the same using the key element.*/
// Create an array named $student with elements bound to different keys
$student = array(
    "name" => "John",
    "age" => 20,
    "grade" => "A",
    "city" => "New York",
    "country" => "USA"
);

// Accessing array elements using keys
echo "Student's Name: " . $student["name"] . "<br>";
echo "Student's Age: " . $student["age"] . "<br>";
echo "Student's Grade: " . $student["grade"] . "<br>";
echo "Student's City: " . $student["city"] . "<br>";
echo "Student's Country: " . $student["country"] . "<br>";
?>
