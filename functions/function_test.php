<?php
include_once "functions/function.php";

$x = 6;
echo "Factorial of {$x} is ".factorial($x);
echo "\n";



  
  $total = sum(55,65,88);
  echo $total;
  
  
  //4)
  function percentage($st){
      $per = $st/3;
      echo $per . "%";
  }
  
  percentage($total);