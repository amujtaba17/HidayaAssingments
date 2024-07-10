<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Function</title>
</head>

<style>
fieldset {

    width: 300px;
}
</style>

<!-- Open Page_login file to view this page where it's functiions are called -->
<body>

    <?php function Login($method="POST",$action=""){?>

    <center>

        <fieldset>

            <legend align="center">Login Form</legend>

            <form action="<?php  echo $action?>" method="<?php echo $method?>">

                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username"></td>
                    </tr>


                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password"></td>
                    </tr>


                    <tr>
                        <td>Submit:</td>
                        <td><input type="submit" name="login" value="Login"></td>
                    </tr>
                </table>

            </form>

        </fieldset>










    </center>




    <?php
}
?>




    <?php function Register($method="POST",$action=""){?>

    <center>

        <fieldset>

            <legend align="center">Register Form</legend>

            <form action="<?php  echo $action?>" method="<?php echo $method?>">

                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username"></td>
                    </tr>


                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="Email"></td>
                    </tr>

                    <tr>
                        <td>Password:</td>
                        <td><input type="Password" name="Password"></td>
                    </tr>


                    <tr>
                        <td>Phone Number:</td>
                        <td><input type="text" name="Phone number"></td>
                    </tr>


                    <tr>
                        <td>Submit:</td>
                        <td><input type="submit" name="Register" value="Register"></td>
                    </tr>
                </table>

            </form>

        </fieldset>


    </center>




    <?php
}
?>

</body>

</html>

