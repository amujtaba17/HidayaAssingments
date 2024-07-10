<?php
session_start();

	session_destroy();

	unset($_SESSION);

	header("location: Login.php?message= You have been logged out !...");
    ?>