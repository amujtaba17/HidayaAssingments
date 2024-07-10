<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>21690_AhmedMujtaba</title>
</head>

<body>
    <h1 align="center">21690 Ahmed mujtaba Vowel & Consonent Counting Assingmnet</h1>



    <hr>


    <form action="21690_Ahmed_mujtaba_totalvovwel.php" method="post">
        <label for="paragraph">Input Any Paragraph here:</label>

        <textarea name="inputpara" id="" rows="10" cols="30"><?php

echo isset($_POST["inputpara"]) ? $_POST["inputpara"] :"";

?>
</textarea>

        <input type="submit" value="Count Vovel/Conso etc" name="submit">
    </form>



</body>

</html>

<?php
// Process Php Code
// Programm Working Correctly

if(isset($_POST['submit'])){

    $input_value = $_POST['inputpara'];
    $v = 0; //FOR VOWELS
    $c =0; //For Consonents

    

    for($i=0;isset($input_value[$i]);$i++){

        $singlechar = $input_value[$i];

        if($singlechar == 'a'||$singlechar == 'e'||$singlechar == 'i'||$singlechar == 'o'||$singlechar == 'u'||$singlechar == 'A'||$singlechar == 'E'||$singlechar == 'I'||$singlechar == 'O'||$singlechar == 'U'){
          
            $v++;

            echo "<br>";
            echo "<br>";

           echo "Wovel Postion $singlechar: $i";
           echo "<br>";
        }
        elseif($singlechar!==' '){

            $c++;


        }
        

    }

    echo "<hr>";
        echo "<hr>";

        echo "Number of Vowels are : $v";
        echo "<br>";
        echo "Number of Consonents are : $c";



}

?>