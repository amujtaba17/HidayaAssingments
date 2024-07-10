<?php

$array = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
//30 indexes so avg will be sum/30 respectively
$sum = 0;

// 1st Portion

for ($i=0;(isset($array[$i]));$i++){

    $sum+=$array[$i];
}

$avgtem = $sum/30;
echo "1.Average Temprature is : $avgtem";

//Sorry Sir for other portions i can not solve but tried output wasn't satisfied<;- ... 

?>