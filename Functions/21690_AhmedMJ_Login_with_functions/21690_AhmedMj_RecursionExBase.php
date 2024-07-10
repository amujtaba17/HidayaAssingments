<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base Exponent</title>
</head>
<body>

<h1 align="center">Base Exponent by Recurssion 21690 Ahmed Mujtaba</h1>

<form action="21690_AhmedMj_RecursionExBase.php" method="post">

<label for="base">Base: <input type="number" name="base"></label>
<br>

<label for="exponent">Exponent: <input type="number" name="exponent"></label>

<input type="submit" value="calculate" name="Submit">

</form>
    
</body>
</html>


<?php

if (isset($_POST["Submit"])){

    $base=$_POST['base'];
    $exponent=$_POST['exponent'];

    function base_exp($base,$exponent){

if($exponent==0){

    return 1;
}
return $base*base_exp($base,$exponent-1);



    }



    echo " $base^$exponent = ".base_exp($base,$exponent);
    echo "<br>";

    echo "The Base is = $base";
    echo "<br>";
    echo "The Exponent is = $exponent";





}






?>