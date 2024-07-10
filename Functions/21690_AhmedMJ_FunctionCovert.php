<?php

echo "<h1 align='center'>Part 1: Calculator using functions</h1>";

function calculator_function($x,$y,$operator){

    if($operator=="+"){
        return $x/$y;
    }elseif($operator=="-"){
        return $x-$y;
    }elseif($operator == "*"){
        return $x*$y;
    }elseif($operator=="/"){
        return $x/$y;
    }else{
        echo "Invalid Operator";
    }

}

echo "Value of given operation is = ".calculator_function(10,4,"*");


echo"<hr>";

echo "<h1 align='center'>Part 2: Marksheet using functions</h1>";


function marksheet($biology,$chemistry,$physics,$maths,$english,$passing){
 if($biology<$passing){
        return "Your are failed in Biology Subject";
 }elseif($chemistry<$passing){

        return "You are failed in Chemistry Subject";

}elseif($physics<$passing){
    return "You are failed in Physics Subject";



}elseif($maths<$passing){
    return "You are failed in Maths Subject";
}
elseif($english<$passing){
    return "You are failed in English Subject";
}
else{

    return "You are passed";
}


}

echo marksheet(50,66,78,40,39,40);


echo"<hr>";


echo "<h1 align='center'>Part 3: Count Sum Array</h1>";

function count_Array($array){

$sum=0;
foreach($array as $key => $value){

    $sum+=$value;


}
return $sum;

}

$data=[2,3,4,5,7,8];
echo "Sum of all Elements in array is ".count_Array($data);


echo"<hr>";


echo "<h1 align='center'>Part 4: Custom Sort array</h1>";
function sorting($array) {
    $number = 0;

    
    foreach ($array as $value) {
        $number++;
    }

    
    for ($i = 0; $i < $number - 1; $i++) {
        
        for ($j = 0; $j < $number - $i - 1; $j++) {
          
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    
    return $array;
}

$dataarray = [2,4,5,6,7,100,88,10];

echo "<pre> Unsorted Array <br>";
print_r($dataarray);
echo "</pre>";
echo "<hr/>";


echo "<pre> Sorted Array <br>";
print_r(sorting($dataarray));
echo "</pre>";
echo "<hr/>";



?>