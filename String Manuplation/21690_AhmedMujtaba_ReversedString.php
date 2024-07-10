<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Reverse String by Ahmed Mujtaba 21690</h1>
    <hr>


<form action="21690_AhmedMujtaba_ReversedString.php" method="post">

<label for="">Taking Input:</label>
<input type="text" name="input" id="" value="<?php

echo isset($_POST['input'])? $_POST['input']:""

?>">
<input type="submit" value="Reverse" name="submit">
</form>
    
</body>
</html>

<?php

if(isset($_POST['submit'])){

    $_POST['input'];
    

    
    for($i=-1;isset($_POST['input'][$i]);$i--){
        
        
         echo $_POST['input'][$i];
        
        
    }
    }


?>