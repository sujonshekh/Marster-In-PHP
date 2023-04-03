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