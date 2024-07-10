<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manuplations by Ahmed Mujtaba</title>
</head>



<body>

    <h1 style="text-align: center;">21690 Ahmed Mujtaba String #1 Assingment</h1>
    <hr>
    <!-- html for form design section -->
    <form action="21690_AhmedMujtaba_StringPrint.php" method="post">

        <label for="Input"><b>Input String:</b></label>

        <input type="text"  value="<?php if(isset($_POST['Input_box'])){echo $_POST['Input_box'];}?>" name="Input_box" placeholder="Enter your String Here">

        <input type="submit" value="submit" name="submit">
        
        

    </form>

</body>

</html>

<!-- Php Code for process -->

<?php


if(isset($_POST['submit'])){

$_POST['Input_box'];

for($i=0; isset($_POST['Input_box'][$i]);$i++){

    echo  $_POST['Input_box'][$i];
    echo "<br>";
}

}




?>