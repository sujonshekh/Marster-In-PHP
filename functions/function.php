<?php
function factorial(int $n){
  $result = 1;
  for($i = $n; $i > 1; $i--){
    $result*=$i;
  }
  return $result;
}


//3)
function sum($math,$eng,$sc){
  $s = $math + $eng + $sc;
  return $s;
}
 //4)
 function percentage($st){
  $per = $st/3;
  echo $per . "%";
}

//4) serve function

function serve($foodType="Coffee",$numOfItems="1 cups"){
          echo "{$foodType} is served {$numOfItems}";
}

// 5) return type fixed
function summation ($x,$y,$z):int{
  return $x+$y+$z;
}

// 6) unlimmited argument pass

function Unsummation (int ...$numbers):int{
  $results =0; 
  for ($i=0;$i<count($numbers);$i++){
        $results+=$numbers[$i];
      }
      return $results;
}

// 7) Recursive Function

function recursive ($start,$end){
  if($start>$end){
    return;
  }
  echo $start."\n";
  $start++;
  recursive($start,$end);
}
recursive(5,20);

// 8) Factorial

function fac ($fn){
      if($fn <= 1){
        return 1;
      }
      return $fn* fac($fn-1);
    }
