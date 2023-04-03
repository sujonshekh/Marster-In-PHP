<?php
// 1. Grade mark system with percentage

$score = 90;

if ($score <= 32){
    echo "Your are Failed. Your marks is {$score} & Grade is 'F'.";
}else if ($score >= 33 && $score <= 45){
    echo "You are Passed. but your marks is too low {$score} & Grade is 'D'";
}else if ($score >= 46 && $score <= 55){
    echo "Your result is avarage marks is {$score} & Grade is 'C' ";
}else if ($score >= 56 && $score <= 59){
    echo "Your result is Good Improve your self marks is {$score} & Grade is 'B'";

}else if ($score >= 60 && $score <= 69) {
    echo "Your result is Impressive but more to go marks is {$score} & Grade is 'B+'";
}else if ($score >= 70 && $score <= 79) {
    echo "Your result is Impressive but more to go marks is {$score} & Grade is 'A-'";
}else if ($score >= 80 && $score <= 89) {
    echo "Your result is Impressive but more to go marks is {$score} & Grade is 'A'";
}else if ($score >= 90 && $score <= 100) {
    echo "Your result is Impressive but more to go marks is {$score} & Grade is 'A+'";
}else {
    echo "Please Enter Valid Number.";
}