<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FloorCeilRound</title>
    <style>
    h1 {
        text-align: center;
    }
    </style>
</head>

<body>

    <h1>Floor Ceil Round by Ahmed Mujtaba 21690</h1>
    <hr>

    <form action="21690_AhmedMujtaba_FCR.php" method="Post">
        <label for="input">Input Value:</label>
        <input type="text" name="inputdata" value="<?php

        echo isset($_POST['inputdata'])? $_POST['inputdata']:""

        ?>">

        <br>

        <label for="Option">Select Option:</label>
        <select name="option" id="">
            <option value="selectop">Select Option</option>
            <option value="Floor">Floor</option>
            <option value="Ceil">Ceil</option>
            <option value="Round">Round</option>
        </select>

        <input type="submit" name="submit" value="submit">

    </form>



</body>

</html>


<?php
if(isset($_POST['submit'])){

    $input = $_POST["inputdata"];
    $option = $_POST["option"];

    //Logic: using switch case from early days of php basic lecture LOOPING & BRANCHING

    switch($option){

        case  ($option=='Floor'):
            echo "Floored value is:" .floor($input);
            echo "<br>";
            echo $input. "=" .floor($input);
            break;
        case ($option=='Ceil'):
            echo "Ceiled value is:" .ceil($input);
            echo "<br>";
            echo $input. "=" .ceil($input);

            break;
        case ($option=='Round'):
            echo "Rounded value is:" .round($input);
            echo "<br>";
            echo $input. "=" .round($input);
            break;  
        
        case ($option=='selectop'):
        echo "Please select option first !!!";
        break;
    }


}




?>