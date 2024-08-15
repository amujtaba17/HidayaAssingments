<?php 
	require_once("require/database_class.php");
	session_start();
	
	$database = new Database(HOST_NAME,USER_NAME,PASSWORD,DATABASE);
	$query = "UPDATE users u SET is_online = '0' ";
	$query .= "WHERE u.user_id='".$_SESSION['user']['user_id']."'";
	$database->execute_query($query);
	
	session_destroy();
	header("location:index.php?msg=Logout Successfully&color=red");

?>