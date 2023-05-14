<?php 

$splice = ['mango','apple','banana','pineapple','water-melon'];
$newArray = ['strawberry','blueberry','avagoda'];
$newSplecie = array_splice ($splice,-5,2,$newArray);
print_r ($splice);
print_r($newSplecie);