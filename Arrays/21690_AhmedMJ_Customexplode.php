<?php
$input = "Ahmed Mujtaba Jawad";
echo "Your String:"."&nbsp".$input;
$array = array();
$breakpoint = " ";
$temp="";
for($i=0;isset($input[$i]);$i++){

    if($input[$i]!==$breakpoint){
        $temp .= $input[$i];
        
    }else{

        $array[]=$temp;
        $temp='';

    }
} 

if(!empty($temp)){
    $array[] = $temp;
}

echo "<pre>";
print_r($array);
echo "</pre>";
?>