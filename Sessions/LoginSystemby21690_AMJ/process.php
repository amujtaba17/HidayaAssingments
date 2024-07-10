<?php
session_start();


if(isset($_REQUEST['login'])){


    $user = "jawad123";//use as username
    $password ="1234";//use as password

    if($_POST['uname']=="" || $_POST['upass']==""){


        header("location:login.php?message=Username OR Password Cannot be Empty");
    }elseif($_POST['uname']==$user && $_POST['upass']==$password){


        $_SESSION['Name'] = "Jawad Ahmed Memon";
        $_SESSION['Username'] = $user;
        $_SESSION["Email"] = "memonjawad54@gmail.com";
        $_SESSION["Address"] = "IMCS,University of Sindh Jamshoro";

        header("location:dashbord.php");

    }else {
        header("location:login.php?message=Invalid Login Credentials");
    }




}else{

    header("location:login.php?message=Login to Your Account to Access");
}

?>