<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    // 1. Basics start numbers
    echo "<h1>Sujon Shekh</h1>";
    $fname ="sujon shekh";
    $lname ="Abdur Rob";
    $number = 5;
    $number += 5;
    $fnumber = 2.88689752; 
    $aNumber = 12.01;
    $bnumber = 1.10;
    $cnumber = 23.215;
    $dnumber = 122.2358200;
    printf ("%08.3f <br>",$aNumber);
    printf ("%08.3f <br>",$bnumber);
    printf ("%08.3f <br>",$cnumber);
    printf ("%08.3f <br>",$dnumber);

    printf ("<h2>My first name is %s and Last name is %s<h2>",$fname,$lname);
    printf ("Add = %d <br>",$number);
    printf ("Your Result is = %.2f <br>",$fnumber);

    // 2. Number converting system
    
    $product = 450000;
    printf ('Number to Octal is %1$d to %1$o',$product); //when variables call it's name is Argument $product
    ?>
</head>
<body>
    
</body>
</html>