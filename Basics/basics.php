
<?php
// Sample
echo "Hello World";
echo "\n";
$question = "How are you?";
echo $question;

// 1. Change the value
echo "\n";
$changeValue = 321;
echo $changeValue;
$changeValue = 3.213456789;
echo "New Value of Variables is = {$changeValue}</br>";

// var_dump ($name) 'var_dump is identify variable type'
// // Type of data variable:
// 1. Integer
// 2. Boolean (True/false)
// 3. string (Single coate double coate)
// 4. float
// 5. array
// 6. object
// 7. Resource
echo "\n";

$fname = "Sujon";
$lname = "Shekh.";

printf("His %s name is %s %s","Full",$fname,$lname);

//1. BODMAS = BRACKET, OR, DIVISION, MULTI, ADDITION, SUB.
//2. Arithmatic operator = +, -, /, %, *
//3. Operand is = 2,3,4
//4. ++ Assign increasing factor
echo "\n";
 $n = 5;
 $m = $n++;

 echo "$m & $n";

 echo "\n";
 $o = 5;
 $s = ++$o;

 echo "$s and $o";

//6. In number system if we provide '0' number before any number in variable it's will be octal number
// as like $o = 017 =15;
//7. for hexa $h = 0x1B;
//8. Variable swapping
echo "\n";
$fisrtName = "Sujon";
$middleName = "Abdur Rob";
$LastName = "Shekh";

printf('My 1st name is %3$s and middle name is %1$s and last name is %2$s',$fisrtName,$middleName,$LastName);