<?php

$sujon = [
    'shekh'=> 45,
    'aniruddho'=> 46,
    'abdur'=> 78,
    '79'=> 'rob',
    'sokhi'=> 80,
    'dj'=> 81
];

$newSujon = array_splice($sujon, 2,2, ['teacher'=> 82, 'customer'=> 83]);
print_r($sujon);