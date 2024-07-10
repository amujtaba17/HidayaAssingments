<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Adding Number</title>
</head>
<body>

<h1 align="center">String Adding numbers by Ahmed Mujtaba</h1>
<hr>

<form action="21690_Ahmed_mujtaba_stringadd.php" method="post">

<label for="input">Input String:</label>
<input type="text" name="data" id="" value="

<?php
 
 echo isset($_POST["data"]) ? $_POST["data"]:""; 


?>



">
<input type="submit" name="submit" id="" value="Calculate">
</form>
    
</body>
</html>

<?php

if(isset($_POST['submit'])){

    $data=$_POST['data']; //taking data varable for string input
    $sum=0; //variable which stores values from 0 to 9

    for($i=0;isset($data[$i]);$i++){

         $nums=$data[$i];

        if($nums>='0' && $nums<='9'){
            
            $sum+=$nums;

        }
        
        
    }



    echo "<hr>";

    echo "Your String:". $data;
    echo "<br>";
    echo "Sum of nums:". $sum;




}



?>