<?php

session_start();

if (!isset($_SESSION['Name'])){
    header('location:2nd.php');
}
?>

<?php
echo $_SESSION['Name'];


?>