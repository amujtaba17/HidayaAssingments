<?php

echo "<h1 align='center'> Even Odd order list assingment by 21690 </h1>";

echo "<br>";
 
//seprate containers for both outputs

 $container_1 = ''; //for odd output
 $container_2 = ''; //for even output


 for($e_list = 2, $o_list = 1; $e_list <= 100 , $o_list <= 100; $e_list+=2 , $o_list+=2){
   if($o_list <= 100){
    $container_1 .= $o_list;
   }
   if($e_list<=100){
    $container_2 .= $e_list;
   }
  
 }
 
 echo $container_1;
 echo "<hr/>";
 echo $container_2;
?>