<?php

echo "<h1 align='center'>Print Table of given number by Ahmed Mujtaba Jawad 21690</h1>";
echo "<h3 align='center'>Friday,07 June 2024</h3>";
echo '<hr>';

$table_no = 7; //Declaring variable of table that you want

//Iteration variable defines the number of times the table has to be multiplied by i.e default value is upto 10.

echo "<h3> You have printed table of  $table_no</h3>";

echo "<br>";

for ($iteration = 1 ; $iteration<= 10 ; $iteration++) {
  echo "$table_no X $iteration = ",$table_no*$iteration;

  echo "<br>";
}




?>