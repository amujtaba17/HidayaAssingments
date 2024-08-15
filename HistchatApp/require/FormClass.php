<?php 

	class Forms{
		public $action = NULL;
		public $method = "GET";

		public function set_action($_action){
			$this->action = $_action; 
		}

		public function get_action(){
			return $this->action; 
		}

		public function set_method($_method){
			$this->method = $_method; 
		}

		public function get_method(){
			return $this->method; 
		}

		public function login_form(){
		?>
		<div align="center">
		<fieldset style="width:80px;">
			<legend>Login Form</legend>
			<form action="<?= $this->get_action();?>" method="<?=  $this->method;  ?>" >
			<table>
				<tr>
					<td><b>Email:</b></td>
					<td>
						<input type="email" name="email" value="" />
					</td>
				</tr>
				<tr>
					<td><b>Password:</b></td>
					<td>
						<input type="password" name="password" value="" />
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input style="padding: 5px;background-color: green;color:white;" type="submit" name="login" value="Login" />
						<input style="padding: 5px;background-color: red;color:white;" type="reset"  name="resert" value="reset" />
					</td>
				</tr>
			</table>	
			</form>
		</fieldset>
		<h3>You don't have an account? <a href="registration.php" style="text-decoration:none;color:red">Register</a></h3>
		</div>

		<?php	
		}
		public function signup_form(){
			?>

			<style>
				fieldset{
					width: fit-content;
				}
				legend{
					font-size: 20px;
				}
			</style>

			<div align="center">

			<fieldset>
				<legend align="center">
					Sign Up Form
				</legend>

				<form action="<?= $this->get_action();?>" method="<?=  $this->method;  ?>" enctype="multipart/form-data">

				<table cellpadding="5px">
					<tr>
						<th>First Name:</th>
						<td><input type="text" name="firstname" required></td>
					</tr>

					<tr>
						<th>Last Name:</th>
						<td><input type="text" name="lastname" required></td>
					</tr>

					<tr>
						<th>Email:</th>
						<td><input type="email" name="email" required></td>
					</tr>
					<tr>
						<th>Password:</th>
						<td><input type="text" name="password" required></td>
					</tr>
					<tr>
						<th>Profile Picture:</th>
						<td><input type="file" name="profile_image" required></td>
					</tr>

					<tr>
					<td colspan="2" align="center">
						<input style="padding: 5px;background-color: green;color:white;" type="submit" name="register" value="Register" />
						<input style="padding: 5px;background-color: red;color:white;" type="reset"  name="resert" value="reset" />
					</td>
				</tr>

				</table>
				</form>
			</fieldset>
			<h3>You already have an account? <a href="index.php" style="text-decoration:none;color:red">Login Here</a></h3>
			</div>





			<?php
		}
		
		


	}



?>