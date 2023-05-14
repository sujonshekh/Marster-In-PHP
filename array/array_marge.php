<?php
// make assosiative array from normal indexing array
$sujon = [ 'shekh', 'Aniruddho', 'Abdur Rob'];
$sokhi = [32,24,29];

$arrayMarge = array_combine($sujon,$sokhi);

print_r ($arrayMarge);

