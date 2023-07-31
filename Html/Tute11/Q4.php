<?php

function getDayOfWeek($number) {
    switch ($number) {
        case 1:
            $day = "Monday";
            break;
        case 2:
            $day = "Tuesday";
            break;
        case 3:
            $day = "Wednesday";
            break;
        case 4:
            $day = "Thursday";
            break;
        case 5:
            $day = "Friday";
            break;
        case 6:
            $day = "Saturday";
            break;
        case 7:
            $day = "Sunday";
            break;
        default:
            $day = "Invalid number";
            break;
    }

    return $day;
}

$number = 3;
$dayOfWeek = getDayOfWeek($number);
echo "Number: $number<br>";
echo "Day is : $dayOfWeek";
?>
