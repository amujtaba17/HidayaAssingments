<?php
session_start();

	if(isset($_SESSION["Username"]))
	{
		header("location: dashbord.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
  </head>

  <style>
    * {
      margin: 0;
      pad: 0;
    }

    h1 {
      background-color: aqua;
      color: red;
      width: 300px;
      text-align: center;
      font-size: 50px;
      font-family: cursive;
      margin: 20px;
      border-radius: 20px;
    }
    legend {
      color: red;
    }
    th {
      color: red;
    }
    fieldset {
      width: 300px;
    }

    body {
      background-color: yellow;
    }
  </style>

  <body>
    <center>
      <h1 align="center">Login Panel</h1>

      <fieldset>
        <legend align="center">Log In to your Account</legend>

        <table border="2" cellpadding="10">
          <form action="process.php" method="post">
            <tr>
              <th>Username:</th>

              <td><input type="text" name="uname" /></td>
            </tr>

            <tr>
              <th>Password:</th>

              <td><input type="password" name="upass" /></td>
            </tr>

            <tr>
              <td colspan="2" align="center">
                <input type="submit" name="login" value="Login" />
              </td>
            </tr>
          </form>
        </table>
        <p>
          <?php
          if(isset($_GET['message'])){

            echo"<strong style='color:red'>".$_GET['message']."</strong>";
          }


          ?>
        </p>
      </fieldset>
    </center>
  </body>
</html>
