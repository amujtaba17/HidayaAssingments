<?php 
	session_start();
	/*echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";*/
	if(!(isset($_SESSION['user']))){
		header("location:index.php?msg=Kindly Login First&color=red");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AJAX DAY3 | GROUP CHAT APPLICATION</title>
	<link rel="stylesheet" type="text/css" href="grid_view.css">
	<style type="text/css">
		.border{
			border: 1px solid teal;
		}
	</style>
	<script type="text/javascript">
	/*Send Message*/	
		function send_message(){
			let user_message =  document.querySelector("#user_message").value
			let xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4 && xhr.status == 200){
					// console.log(xhr.responseText);
					document.querySelector("#show_response").innerHTML = xhr.responseText;
					document.querySelector("#user_message").value = "";
					show_message();
				}
			}

			xhr.open("GET","ajax_process.php?user_message="+user_message+"&action=send_message");
			xhr.send();
		}
	/*Send Message*/	

	/*Show Message*/	
		function show_message(){
			let xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if( xhr.readyState == 4 && xhr.status == 200){
					// console.log(xhr.responseText);
					document.querySelector("#show_message").innerHTML = xhr.responseText;
				}
			}
			xhr.open("GET","ajax_process.php?action=show_message");
			xhr.send();
		}
	/*Show Message*/	

	/*Show Users | online-offline*/
		function show_users(){
			let xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4 && xhr.status == 200){
					// console.log(xhr.responseText);
					document.querySelector("#show_users").innerHTML = xhr.responseText;
				}
			}
			xhr.open("GET","ajax_process.php?action=show_users");
			xhr.send();	
		}	
	/*Show Users | online-offline*/	

	setInterval("show_message()", 1000);	
	setInterval("show_users()", 2000);	

	</script>
</head>
<body onload="show_message()">
	<div class="row">
		<div class="col-12" style="background-color: teal;color: white;border-radius: 20px;">
			<h1 align="center">AJAX GROUP CHAT APPLICATION</h1>
		</div>
	</div>
	<hr/>

	<div class="row">
		<div class="col-12 border" align="right">
			<h3><?= $_SESSION['user']['first_name']." ".$_SESSION['user']['last_name'] ?>:&nbsp;<span><a href="logout.php" style="text-decoration: none;background-color: red;color: white;padding: 10px;border-radius:5px;">Logout</a></span>
			</h3>
		</div>
	</div>



	<div class="row">

		<!-- messages div -->
		<div class="col-8 border" style="height:auto;">
			<div class="row" style="margin-bottom:5px;">
				<div class="col-12" style="background-color:teal;color: white;border-radius: 20px;">
					<h2 align="center">Messages</h2>
				</div>
			</div>
			<!-- Response Msg Div -->
			<div class="row">
				<div class="col-12" align="center" id="show_response">
					<!-- Ajax Response -->
				</div>
			</div>
			<!-- Response Msg Div -->


			<div class="row">
				<div class="col-12 border" style="height:400px;overflow: auto;" id="show_message">

				<!-- Inside div will come from Ajax Response -->	
				
				<!-- Ajax Response -->	
				

				</div>
			</div>

			<!-- text area div -->
			<div class="row" style="margin-top:2px">
				<div class="col-12 border" style="position:relative;">
					<textarea name="user_message" placeholder="Enter Message Here..!" cols="80" id="user_message"></textarea>&nbsp;
					<button style="position:absolute;top:25%;background-color:teal;color: white;width: 50px;height: 30px;" onclick="send_message()">Send</button>	
				</div>
			</div>
			<!-- text area div -->

		</div>
		<!-- messages div -->
		
		<!-- user div | online/offline -->
		<div class="col-4 border">
			<div class="row">
				<div class="col-12" style="background-color:teal;color: white;border-radius: 20px;">
					<h2 align="center">User's</h2>
				</div>
			</div>

			<div class="row" style="margin-top:2px">
				<div class="col-12 border" style="height:450px;overflow:auto;" id="show_users">
					
					<!-- Inside div will come from AJAX Response -->
					
					<!-- Inside div will come from AJAX Response -->


				</div>
			</div>
		</div>
		<!-- user div | online/offline -->
	</div>

	
</body>
</html>