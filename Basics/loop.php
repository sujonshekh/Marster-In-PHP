<?php

for ($i = 1; $i <= 10; $i++){
    echo "\n";
    echo "$i";
    
        for ($j = 1; $j < $i; $j++){
            echo "#";
        }
    
}
echo "\n";
for ($s = 1; $s <= 10; $s++ ){
    echo "\n";
    echo  "$s) " . "Sujon Shekh";
}
echo PHP_EOL;
// Multiple loop stepping
echo PHP_EOL;
for($t = 10, $v = 1; $t > 0; $t--, $v++){
    echo $t.":".$v;
    echo "\n";
}
// Nested loop
echo "\n";

for ($a = 1; $a <=100; $a+=10){
    for ($b = $a; $b < $a+10; $b++){
        echo $b.' ';
    }
 echo "\n";
}

for ($l =1; $l <= 10; $l++){
    if(3 == $l){
        echo "No: ".$l;
        echo "\n";
        continue;
      
        
    }
    echo "Number: ".$l;
    echo "\n";
}

echo "\n";
// Factorial
$fnum = 7;

for ($r = $fnum, $factorial = 1; $r > 1; $r--){
   $factorial*=$r;
}
printf("Factorial Number %d is %d",$fnum,$factorial);
echo "\n";
echo "\n";
 

$result = 1;

for ($fc=1; $fc<=10; $fc++){
    $result*=$fc;
    echo "Factorial of {$fc} is {$result} \n";
}
