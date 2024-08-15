<?php 
	session_start();
	require_once("require/FormClass.php");
	$form = new Forms;
	if((isset($_SESSION['user']))){
		header("location:hist_chat_application.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="grid_view.css">
</head>
<body>
	<div class="row">
		<div class="col-12" style="background-color: teal;color: white;border-radius: 20px;">
			<h1 align="center">AJAX GROUP CHAT APPLICATION</h1>
		</div>
	</div>
	<hr/>
	<?php 
		if(isset($_GET['msg']) && isset($_GET['color'])){
		?>
		<div class="row">
			<div class="col-12">
				<p align="center" style="color:<?= $_GET['color'] ?>">
					<?= $_GET['msg'] ?>
				</p>
			</div>
		</div>
		<?php
		}
	?>

	<?php
		$form->set_action("login_process.php"); 
		$form->set_method("POST"); 
		$form->login_form();
	?>
</body>
</html>