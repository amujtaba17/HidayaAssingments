<?php

echo "<h1 align='center'> Marksheet in switch by Ahmed Mujtaba 21690</h1>";


$sub1 = 45;
$sub2 = 75;
$sub3 = 47;
$sub4 = 78;
$sub5 = 77;

$total = $sub1+$sub2+$sub3+$sub4+$sub5;
$percentage = $total/500*100;

echo "Your percentage = $percentage";
echo "<br>";


switch($sub1){

case($sub1<40):
echo "Your Grade:Fail";
break;

}



switch($sub2){

case($sub2<40):
echo "Your Grade:Fail";
break;
}


switch($sub3){

case($sub3<40):
echo "Your Grade:Fail";
break;
}


switch($sub4){

case($sub4<40):
echo "Your Grade:Fail";
break;
}


switch($sub5){

case($sub5<40):
echo "Your Grade:Fail";
break;
}


switch($percentage){

case ($percentage>=80):
echo "Your Grade : A1";
break;

case ($percentage>=70 && $percentage<=79):
echo "Your Grade : A";
break;

case ($percentage>=60 && $percentage<=69):
echo "Your Grade : B";
break;

case ($percentage>=50 && $percentage<=59):
echo "Your Grade : C";
break;

case ($percentage>=40 && $percentage<=49):
echo "Your Grade : D";
break;

case ($percentage<40):
echo "Your Grade : Fail";
break;

 
 
default:
  echo "Invalid Operator";



}

?>