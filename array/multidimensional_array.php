<?php

$new = [
    [45,"Tamin","IQBAL",45],
    [65,"SUMON","SAKIB",75]
];

echo $new[1][3];
echo "\n";
for ($row =0; $row < 2; $row++){
    for ($col =0; $col < 4; $col++){
        echo $new [$row][$col];
    }
    echo  "\n";
}

// 2. Assosiative multidimensional array
$emp = [
    [1,"Sujon","CSST",34550],
    [2,"Saima","S",500],
    [3,"Babul","Business",30000],
    [4,"Rina","HW",2000]
];

echo "\n";
foreach ($emp as $v1){
    foreach($v1 as $v2){
        echo $v2 . " ";
    }
    echo  "\n";
}
