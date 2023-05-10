<?php

$emp = [
    [1,"Sujon","CSST",34550],
    [2,"Saima","S",500],
    [3,"Babul","Business",30000],
    [4,"Rina","HW",2000]
];
echo $emp[2][1];
echo "\n";
for ($row =0; $row < 4; $row++){
    for ($col =0; $col <4; $col++){
        echo $emp [$row][$col];
    }
    echo  "\n";
}