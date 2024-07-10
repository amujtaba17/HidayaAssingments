<?php
session_start();
if(!isset($_SESSION["Username"])){
    header("location:login.php?message=You must Log In to Access Dashboard");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

<style>

legend{
    font-size: 20px;
    color: red;
}
fieldset{

    width: 300px;
}


</style>

</head>
<body>
<center>

    <fieldset>
        <legend>Welcome Back <?php echo $_SESSION["Name"]?></legend>
    
    <p>Username: <?php  echo $_SESSION['Username']?></p>
    <h2><?php  echo $_SESSION['Name']?></h2>
    <p>Email: <?php  echo $_SESSION['Email']?></p>
    <p><?php  echo $_SESSION['Address']?></p>
    
    </fieldset>

</center>
    
</body>
</html>