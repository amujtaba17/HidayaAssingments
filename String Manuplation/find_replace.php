<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Replace</title>
</head>

<body>
<!-- Html for Form -->

    <div class="div formdiv" id="formdiv" style="border: 1px solid red; text-align:center">
    <form action="find_replace.php" class="form" method="post">

    <h1>Find & Replace by Ahmed Mujtaba Jawad 21690</h1>

            
            <h2>Find:</h2> <input type="text" name="find">

            <br>

            
            <h2>Replace:</h2><input type="text" name="replace">
            <br>

        
            <h2>Input Data:</h2><textarea name="inputdata" id="" rows="7" cols="30">

            <?php if(isset($input)){ echo $input;} ?>

            </textarea>
            <br>

            <input type="submit" name="submit">

        </form>
    </div>

</body>

</html>

<?php
    if(isset($_POST['submit'])){

        echo "Hello";
    }

    //we have declared 3 variables for our inputs
    /*

    
    2nd for finding particular index
    3rd for replacing the find value
    */

//     $_POST['inputdata'];
//     $find=$_POST['find'];
//     $replace=$_POST['replace'];

//     for($i=0;isset($_POST['inputdata'][$i]);$i++){

//         if($_POST['inputdata'][$i] == $find){

//             $_POST['inputdata']=$replace;
//         }

//         echo $_POST['inputdata'][$i];

    

// }

// }

?>