<?php

echo "<h1 align='center'>String Length count Function</h1>";


function string_length($input){


    $count=0;

for($i=0;isset($input[$i]);$i++){

$count++;


}
return $count;





}
$input="Ahmed Mujtaba";

echo "Length of current string is:". string_length($input);



echo "<hr>";



echo "<h1 align='center'>Custom Range Function</h1>";

function range_custom($start,$end){

$arr=array();

for($i=$start;$i<=$end;$i++){

$arr[]=$i;
}
return $arr;



}

echo "<pre>";
print_r(range_custom(1,13));
echo "</pre>";


echo "<hr>";

echo "<h1 align='center'>Custom explode Function</h1>";


$input_string = "red green blue";
echo " $input_string<br>";

function custom_explode($input_string, $seprator){
    $arr = array();
    $blank = '';
    
    for ($i = 0; isset($input_string[$i]); $i++) {
        if ($input_string[$i] != $seprator) {
            $blank.= $input_string[$i];
        } else {
            $arr[] = $blank;
            $blank = '';
        }
    }
    
    $arr[] = $blank;
    return $arr;
}

$seprator = " "; 
$arr = custom_explode($input_string, $seprator);

echo " <pre>";
print_r($arr);
echo "</pre>";
echo "<hr/>";




echo "<h1 align='center'>Custom string reverse Function</h1>";


function custom_reverse($input){

$reverse='';

for ($i= -1; isset($input[$i]); $i--) {

    $reverse.= $input[$i];



}

return $reverse;


}

$string="Hidaya Organization";
echo custom_reverse($string);


?>