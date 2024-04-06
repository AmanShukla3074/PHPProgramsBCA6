<?php
// Define a multidimensional array representing a student roster
/*6.Write a program in PHP to demonstrate the use of multidimensional arrays.*/
$studentRoster = array(
    array("John", 20, "A"),
    array("Emma", 22, "B"),
    array("Mike", 21, "A")
);

// Displaying the student roster
echo "Student Roster:<br>";
foreach ($studentRoster as $student) {
    echo "Name: " . $student[0] . ", Age: " . $student[1] . ", Grade: " . $student[2] . "<br>";
}
?>
