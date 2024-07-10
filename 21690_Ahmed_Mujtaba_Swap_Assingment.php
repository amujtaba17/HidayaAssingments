<?php

//Assingnment No2 Swap 2 variables without using 3rd variable.

$x = 20;
$y = 10;

echo "<h2>Before Swapping</h2>";
echo "<br>";
echo "X = ",$x;
echo "<br>";
echo "Y = ",$y;

//Logic to Solve

$x = $x+$y;
$y = $x-$y;
$x = $x-$y;



echo "<h2>After Swapping</h2>";
echo "<br>";
echo "X = ",$x;
echo "<br>";
echo "Y = ",$y;





?>