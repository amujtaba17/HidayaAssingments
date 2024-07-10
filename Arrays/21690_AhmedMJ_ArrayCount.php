<?php

$array=array(2,4,5,6,"hidaya","arrayItem","etc","4",1=>"Jawad");
$elements=0;

for($i=0;(isset($array[$i]));$i++){


    $elements++;

}


echo"<pre>";
echo"Your Array is:";
echo "<br>";
print_r($array);
echo"</pre>";

echo "Total number of elements in the array are:" .$elements;



?>