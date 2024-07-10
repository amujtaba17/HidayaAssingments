<?php

echo "<h1 align='center'> Calculator in switch by Ahmed Mujtaba 21690</h1>";

echo "<hr>";

$value1 = 45;
$value2 = 15;

$operator = '+';

switch($operator){

case '+':
 echo "You've performed Addition $value1 + $value2 =",$value1+$value2;
break;
case '-':
 echo "You've performed Subtraction $value1 + $value2 =",$value1-$value2;
break; 
case '*':
 echo "You've performed Multiplication $value1 + $value2 =",$value1*$value2;
break; 
case '/':
 echo "You've performed Division $value1 + $value2 =",$value1/$value2;
break; 
 
default:
  echo "Invalid Operator";



}

?>