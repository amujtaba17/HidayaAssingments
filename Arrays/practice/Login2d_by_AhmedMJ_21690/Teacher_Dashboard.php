<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashborad</title>
</head>

<style>
body {

    background-color: orange;
}

* {
    margin: 0;
    padding: 0;
}
 #mh1 {
    background-color: white;
    color: blue;
    width: 300px;
    border-radius: 20px;
    padding: 20px;

    margin-top: 20px;
}

button {
    margin-top: 20px;
    width: 200px;
    background-color: pink;
    font-size: large;
    padding: 10px;
}

button a {
    text-decoration: none;
}
fieldset{
    margin-top: 20px;
    width: 300px;
    color: aliceblue;
    font-size: 20px;
}
legend{

    font-size: 30px;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
</style>

<body>
    <center>


        <h1 id="mh1">Teacher Dashborad</h1>
        <button><a href="Logout.php">Logout</a></button>

        <fieldset>
            <legend align="center">Welcome</legend>

            <center>

            <h1 class="fsh1">Hello <?php echo $_SESSION['data']['Name']?></h1>
            <h4>Username: <?php echo $_SESSION['data']['Username']?></h4>
            <h4>Role: <?php echo $_SESSION['data']['Role']?></h4>
            <h4>Status: <?php if($_SESSION['data']['Status']==1){echo "Active";}?></h4>
            <h4>Email:<?php echo $_SESSION['data']['Email']?></h4>





            </center>
        </fieldset>





    </center>
</body>

</html>