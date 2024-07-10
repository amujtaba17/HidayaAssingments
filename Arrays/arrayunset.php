<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Fifo/lifo</title>
</head>

<body>
    <form action="arrayunset.php" method="post">

        <label for="input">Input Array:</label>
        <input type="text" name="input">
        <input type="submit" name="submit" value="ADD">
        <input type="submit" value="Fifo" name="fifo">
    </form>
</body>

</html>

<?php
if(isset(($_POST['submit']))){

for($i=0;$i<=5; $i++){
    $array[$i]=[$_POST['input']];
}
//$input = $_POST['input'];
// for($i= 0;$i<=$input;$i++){

//     $array[$i]=$input;

// }
print_r($array);
}

?>