<?php
// Function to get the day of the week
function getDayOfWeek($number) {
    switch ($number) {
        case 1:
            return "Monday";
        case 2:
            return "Tuesday";
        case 3:
            return "Wednesday";
        case 4:
            return "Thursday";
        case 5:
            return "Friday";
        case 6:
            return "Saturday";
        case 7:
            return "Sunday";
        default:
            return "Invalid number";
    }
}

// Example usage
$dayNumber = 3; // Replace this with the number for the desired day
$dayOfWeek = getDayOfWeek($dayNumber);
echo "Day $dayNumber is $dayOfWeek";
?>

