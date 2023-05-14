<?php 
$extract = [
    'sujon'=> 45,
    'shekh'=> 46,
    'hello'=> 47,
    'world'=> 48,
      49   => 50
];

$slice = array_slice($extract,-5, null, true);
print_r ($slice);