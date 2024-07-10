
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linear Search by Ahmed Mujtaba Jawad 21690</title>
</head>
<body>
<h1 align="center">Linear Search by Ahmed Mujtaba Jawad 21690</h1>

<hr>

    <form action="21690_AhmedMujtaba_LinearSearch.php" method="post">
    <label for="">Search:</label>
    <input type="text" name="value">
    <input type="submit"  name="submit" value="Search Item">
    </form>
</body>
</html>

<?php

$array = array(2,3,4,6,7,5,9);
echo "<pre>";
print_r($array);
echo "</pre>";

if(isset($_POST['submit'])){

$search=$_POST['value'];

for($i=0;isset($array[$i]);$i++){

    $item = $array[$i];
    $find_value = false;
    
    if($item==$search){
        
        $find_value = true;
        echo "Value $search is found at Position [$i]";
        echo "<br>";
        break;
    }

}

if(!$find_value){
    echo "Value not found";
}


}
?>