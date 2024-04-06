<?php
//3.Create a program in PHP to demonstrate the use of If ... Else and switch statements.
// Example of if...else statement
$age = 25;

if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}

echo "<br>";

// Example of switch statement
$weekday = 3; // Assuming 1 represents Monday, 2 represents Tuesday, and so on...

switch ($weekday) {
    case 1:
        echo "It's Monday!";
        break;
    case 2:
        echo "It's Tuesday!";
        break;
    case 3:
        echo "It's Wednesday!";
        break;
    case 4:
        echo "It's Thursday!";
        break;
    case 5:
        echo "It's Friday!";
        break;
    case 6:
        echo "It's Saturday!";
        break;
    case 7:
        echo "It's Sunday!";
        break;
    default:
        echo "Invalid day!";
}
?>