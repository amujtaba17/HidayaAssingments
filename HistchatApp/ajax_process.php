<?php 
	session_start();
	
	require_once("require/database_class.php");
	$database = new Database(HOST_NAME,USER_NAME,PASSWORD,DATABASE);
	/*echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";*/
	/*echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";*/
	extract($_REQUEST);
	extract($_SESSION['user']);
	if(isset($_REQUEST['action']) && $_REQUEST['action'] == "send_message"){
		$user_message = htmlspecialchars($user_message);

		$query = "INSERT INTO messages (user_id,message,message_time)";
		$query .= " VALUES ('".$user_id."','".$user_message."', NOW())";
		
		$flag =  $database->execute_query($query);
		if($flag){
			echo "<b style='color:darkgreen'>Message Send Successfully</b>";
		}else{
			echo "<b style='color:darkred'>Some Thing Went Wrong Try Again..!</b>";
		}
	}
	elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "show_message"){
		// echo "Message Show";
		$query  = "SELECT * FROM messages m, users u";
		$query .= " WHERE m.user_id = u.user_id";
		$query .= " ORDER BY m.message_id DESC";

		$result =  $database->execute_query($query);
		if($result->num_rows > 0){
			while ($row = mysqli_fetch_assoc($result)) {
				$floatValue = ($user_id == $row['user_id'])?"right":"left";
				$bgColor     = ($user_id == $row['user_id'])?"lemonchiffon":"lightgrey";
		?>
		<div class="border" style="padding:5px;max-width: 50%;float:<?= $floatValue ?>;margin-bottom:5px;border-radius: 0px 20px;background-color: <?= $bgColor ?>;">
				<p style="position: relative;">
					<img src="<?= $row['profile_image'] ?>" width="50px" height="50px" style="border-radius: 20px;">&nbsp;
					<span style="position:absolute;top:25%"><b><?= $row['first_name']." ".$row['last_name'] ?></b></span>
				</p>
				<p><?= $row['message'] ?></p>
				<span style="float: right;">Time: <?= date("j F Y h:i A" ,strtotime($row['message_time'])); ?></span>
		</div>
		<p style="clear: both;"></p>
		<?php
			}
		}else{
			echo "<p style='color:darkred'>No Messages Found</p>";
		}
	}
	elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "show_users")
	{
		$query = "SELECT * FROM users u";
		$query .= " WHERE u.user_id != '".$user_id."'";
		$query .= " ORDER BY is_online DESC";
		$result =  $database->execute_query($query);
		if($result->num_rows > 0){

			while($row = mysqli_fetch_assoc($result)){
				$onlinColor = ($row['is_online'] == 1)?"darkgreen":"darkred";
				$onlinValue = ($row['is_online'] == 1)?"Online":"Offline";
			
			?>
				<div class="border" style="background-color:lemonchiffon;margin-bottom:2px;">
					<table border="0">
						<tr>
							<td>
								<img src="<?= $row['profile_image'] ?>" width="50px" height="50px" style="border-radius:50px">
							</td>
							<td style="width:80%"><span><b><?= $row['first_name']." ".$row["last_name"] ?></b></span></td>
							<td style="color:<?= $onlinColor ?>"><span><b><?= $onlinValue ?></b></span></td>
						</tr>
					</table>
				</div>
			<?php	
			}


		}else{
			echo "<p style='color:darkred'>No User Founds</p>";
		}
	}
?>