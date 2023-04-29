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
  
  
  echo "\n";

  // 5)
  $ft = "tea";
  serve($ft);
  echo "\n";


  //  Return Type Fixed
echo summation(40,50,60);

 // 6) Unlimited Argument pass
echo "\n";
 echo Unsummation(10,20,30,40,50,60);
 
 