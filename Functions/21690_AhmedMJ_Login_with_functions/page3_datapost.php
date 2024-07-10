<?php

echo "<h1 align='center'>---Data Post Page--</h1>";


if(isset($_REQUEST['login'])){

    echo "You have Logined";

    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    include_once("page_login.php");

}

if(isset($_REQUEST['Register'])){

    echo "You have Registered";

    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";

    include_once("page_login.php");

}



?>