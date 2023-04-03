<?php
// leap year

$year = 2024;
if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "{$year} Leap year";
}else {
    echo "{$year} is not Leap Year";
}
echo "\n";

// 2. ternary operator

$n = 9;
$number = ($n % 2 == 0) ? "$n is a Even": "$n is Odd";
echo "$number";