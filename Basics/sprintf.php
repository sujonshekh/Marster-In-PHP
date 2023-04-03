<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprintf is return printf and store data in New Variables</title>
    <?php
    $fname = "<h1>Sujon</h1>";
    $lname = "<h1>Shekh</h1>";
    $output = sprintf("My name is %s %s",$fname,$lname);
    echo strtoupper($output);

    ?>
</head>
<body>
    
</body>
</html>