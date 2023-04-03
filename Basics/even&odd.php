<!-- Write a negative and positive even and odd number -->

<?php

$n = 12;

$num = $n % 2;

if ($num == 0){
    echo "its even number";
}else {
    echo "it's odd number";
}
echo "\n";

$numb = 6;

$number = $numb % 2;
if ( 0 == $number && $numb > 0){
    echo "{$numb} is a Positive Even Number.";
}else if( 1 == $number && $numb > 0){
    echo "{$numb} is a Positive Odd Number.";
}else if ( 0 == $number && $numb  < 0){
    echo "{$numb} is Negative Even Number";
}else if ( -1 == $number  && $numb < 0){
     echo "{$numb} is Negative Odd Number.";
}
 