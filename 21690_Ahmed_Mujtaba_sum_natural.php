<?php

echo "<h1 align ='center'>Sum of first 10 Natural Numbers by Ahmed Mujtaba 21690</h1>";
echo '<hr>';

$output = "";

$sum_natural = 0; //variable to store sumation values from the loop.

for($n_n=1;$n_n<=10;$n_n++){

$sum_natural = $sum_natural+$n_n;

if($n_n <= 9){

$output.= "$n_n+";



}else{
      
     $output.=$n_n;

}
}


echo "<h2 align = 'center'>$output = $sum_natural</h2>";


echo '<hr>';

?>