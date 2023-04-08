<?php

$n = 6;

($n > 20) ? $s = "true": $s = "false";
echo $s;

echo "\n";

$result = (10 == $n) ? "A" : ((5 == $n) ? "B" : "C"); 
echo "$result";
echo "\n";

$s = "Value is = " . ($n % 2 == 0 ? "Even" : "Odd");
echo "$s";

