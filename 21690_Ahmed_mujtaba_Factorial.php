<?php

echo "<h1 align ='center'>Factorial of a given number Assingment done by Ahmed Mujtaba 21690</h1>";
echo '<hr>';

$fact_val=1; //initial value that starts from 1*2*3*4 and so on...
$numb=5; //Enter value of your choice that you want to get factorial of.. 

while($numb>0){

$fact_val = $fact_val*$numb;

$numb = $numb-1;


}

echo $fact_val;

echo '<hr>';

?>