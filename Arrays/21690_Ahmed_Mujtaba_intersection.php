<?php
$array_1 = [10,12,56,78,89,67,45,90];
$array_2 = [23,10,31,44,56,67,89,101,99];
$common = array(); //It's an empty array which stores common values

for($i=0;isset($array_1[$i]);$i++){

    if(isset($array_1[$i])){
        for($j=0;isset($array_2[$j]);$j++){
            if($array_1[$i]==$array_2[$j]){
                $common[] = $array_1[$i];
                break;
            }
        }
    }
}

echo "Array 1 values";
echo"<br>";

foreach($array_1 as $values){
echo $values."   ";    
}

echo "<br>";
echo "<hr>";
echo "Array 2 values";
echo"<br>";

foreach($array_2 as $values){
echo $values."   ";    
}
echo "<br>";

echo "<hr>";

echo "Common values";
echo"<br>";


foreach($common as $values){
echo $values."   ";    
}




?>