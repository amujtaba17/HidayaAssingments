<?php

echo "<h1 align='center'>Marksheet Assingment by Ahmed M Jawad 21690</h1>";
echo "<hr>";

//Assign your Marks according to your will

$chem = 55;
$phy = 70;
$eng = 76;
$bio = 87;
$urdu = 89;

$total = $chem+$phy+$eng+$bio+$urdu;
$percentage = $total/500*100;

echo "Your total marks are :",$total;
echo "<br>";
echo "Your percentage is :",$percentage;
echo "<br>";


if($percentage>=80){
echo "Your grade: A1";
} 


if($percentage<=79 && $percentage>=70){
echo "Your grade: A";
}

if($percentage<=69 && $percentage>=60){
echo "Your grade: B";
}

if($percentage<=59 && $percentage>=50){
echo "Your grade: C";
}

if($percentage<=49 && $percentage>=40){
echo "Your grade: D";
}

if($percentage<39){
echo "Your Grade F";
}








?>