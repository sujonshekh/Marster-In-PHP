<?php 
// assosiative array
$age =[
    "sujon" => 29,
    "saima" => 19,
    "rina"  => 45,
    "babul" => 60
];

$age ["sujon"] = 30;

// var_dump($age);
foreach ($age as $key => $value){
    echo "$key = $value \n";
}

// push pop, shift, inshift...

$sujon = [
        30,
        2008,
        2010,

];
array_unshift ($sujon, 32);
array_push ($sujon, 31);
for ($i=0 ; $i < count($sujon); $i++){
    echo $sujon[$i]."\n";
}
