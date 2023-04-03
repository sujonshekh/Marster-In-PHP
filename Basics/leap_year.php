<?php
// leap year

$year = 2004;
if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "{$year} Leap year";
}else {
    echo "{$year} is not Leap Year";
}