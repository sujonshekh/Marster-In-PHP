<!-- 1. Chile to adult program -->

<?php
$age = 85;
if ($age >= 1 && $age <= 5){
    echo "This person is Child";
}elseif ($age >= 13 && $age <= 17){
    echo "This person is Teeneger";
}else if ($age >= 18 && $age <= 30){
    echo "This person is Adult";
}else {
    echo "This person is Old";
}

// Scalar value = "lemon" always be left side if we assign it declare with variables that is why
echo "\n";
$food = "lemon";

if ("apple" == $food  || "lemon" == $food){
    echo "{$food} is Fruits.";
}else {
    echo "{$food} is not fruits";
}  // Pipe sign is for OR && sign is AND Logical operator 
echo "\n";

$a = 20;
$b = "20";

if ($a === $b){
    echo "You are this age.";
} else {
   echo "your logic is not right.";
}

echo "\n";
$su = 19;
$sa = 18;

if ($su <=> $sa){
    echo "Always Right";
}else {
    echo "Always Wrong";
}