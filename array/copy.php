
<!-- Copy by value and copy by refference, -->
<?php 
$copy = [
    "fname" => "Hello",
    "lname" => "World"
];

$newCopy = &$copy;

$newCopy ["lname"] = "Pluto";

print_r ($copy);
print_r ($newCopy);
