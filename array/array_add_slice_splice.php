<?php

$sujon = [
    'shekh'=> 45,
    'aniruddho'=> 46,
    'abdur'=> 78,
    '79'=> 'rob',
    'sokhi'=> 80,
    'dj'=> 81
];
// in splice case we can't hold our key indexing
$newSujon = array_splice($sujon, 2,2, ['teacher'=> 82, 'customer'=> 83]);
print_r($sujon);

// in this case we need to slice this case..

$newSujonUpdated1 = array_slice($sujon,0,2);
$newSujonUpdated2 = array_slice($sujon,4);
$newSujonUpdated3 = $sujon =['teacher'=>82, 'customer'=>83];

$newSujon1 = $newSujonUpdated1+$newSujonUpdated3+$newSujonUpdated2;

print_r($newSujon1);