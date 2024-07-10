<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Form</title>
    <style>
    body {
        background-color: teal
    }

    * {
        margin: 0;
        padding: 0;
    }

    h1 {

        background-color: black;
        color: yellow;
        padding: 30px;
        width: 20%;
        margin-top: 20px;
        border-radius: 20px;

    }

    table{
        margin-top: 30px;
        color: yellow;
        background-color: black;
    }

    table #submit{
        background-color: red;
        width: 120px;
        color: yellow;
        padding: 10px;
        transition: 1s;
    }

    table #submit:hover{
        background-color: teal;
        color: yellow;
        transition: 1s;
        
    
    }


    </style>
</head>

<body>
    <center>


        <h1>Login Panel</h1>

        <table cellspacing="20px">
            <form action="process.php" method="post">

            <tr>
                <td><label for="">Username:</label></td>
                <td><input type="text" name="Username"></td>
            </tr>

            <tr>
                <td><label for="">Password:</label></td>
                <td><input type="Password" name="Password"></td>
            </tr>

            <tr>
                <td colspan="2" align="center" ><input type="submit" name="login" value="Log In" id="submit"></td>
            </tr>

            <tr>
                <td colspan="2">
                   <p align="center">
                   <?php
                   if(isset($_REQUEST['message'])){
                    echo ''.$_REQUEST['message'].'';
                   }
                   ?>
                   </p>
                </td>
            </tr>











            </form>
        </table>


    </center>

</body>

</html>