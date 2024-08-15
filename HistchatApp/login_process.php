<?php 
	session_start();
	require_once("require/database_class.php");	
	$database = new Database(HOST_NAME,USER_NAME,PASSWORD,DATABASE);
	
	/*echo "<pre>";
	print_r($database->connection);*/

	if(isset($_POST['login'])){
		extract($_POST);
		

		$query = "SELECT * FROM users u ";
		$query .= "WHERE u.email ='{$email}' AND u.password ='{$password}' ";

		$result =  $database->execute_query($query);
		if($result->num_rows > 0){

			$row = mysqli_fetch_assoc($result);
			$_SESSION['user'] = $row;
			$query = "UPDATE users u SET is_online = '1' ";
			$query .= "WHERE u.user_id='".$row['user_id']."'";
			$database->execute_query($query);
			
			header("location:hist_chat_application.php");

		}else{
			header("location:index.php?msg=Invalid Email Or Password&color=red");
		}
	}elseif(isset($_POST['register'])){
		extract($_POST);
		// echo "<pre>";
		print_r($_POST);
		// print_r($_FILES);
		// echo "</pre>";

		$folder="profile_images";
		if(!is_dir($folder)){
			if(!mkdir($folder)){
				echo "Folder is already maded";
			}
		}
		$profile_temp=$_FILES['profile_image']['tmp_name'];
		// var_dump($profile_temp);
		$profile_name=$_FILES['profile_image']['name'];
		// var_dump($profile_name);
		$path=$folder."/".rand().$profile_name;
		
		if(move_uploaded_file($profile_temp,$path)){

			$querry="INSERT INTO users VALUES(NULL,'".$firstname."','".$lastname."','".$email."','".$password."','".$path."',DEFAULT)";

			$result=$database->execute_query($querry);
			if($result){
				header('Location:registration.php?msg=User Successfully Registered&color=green');
			}else{
				header('Location:registration.php?msg=User with this email already exists&color=red');
				
			}
			
		}

	}
?>