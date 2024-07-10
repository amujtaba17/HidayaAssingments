<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <fieldset align="center">
      <legend>Student Registration Form</legend>
      <table align="center">
        <form method="post" <?php if(isset($_POST['viewrecord'])) { echo 'action="viewdata.php"'; } ?>>
          <tr>
            <th>ID:</th>
            <td><input readonly type="text" name="ID" id="" value="
            <?php

            echo $rand = rand(2000,3000);
            ?>
            
            " /></td>
          </tr>

          <tr>
            <th>Name:</th>
            <td><input type="text" name="Name" id="" /></td>
          </tr>

          <tr>
            <th>Father:</th>
            <td><input type="text" name="Fathername" id="" /></td>
          </tr>

          <tr>
            <th>Surname:</th>
            <td><input type="text" name="surname" id="" /></td>
          </tr>

          <tr>
            <th>Department:</th>
            <td>
              <select name="department" id="">
                <option value="">Computer Science</option>
                <option value="">Information Technology</option>
                <option value="">Software Engineering</option>
                <option value="">Data Science</option>
              </select>
            </td>
          </tr>

          <tr>
            <td><input type="submit" name="addrecord" value="Add Record" /></td>
          </tr>
          <tr>
            <td><input type="submit" name="viewrecord" value="View"/></td>
          </tr>
        </form>
      </table>
    </fieldset>
  </body>
</html>

<?php
if(isset($_POST["addrecord"])){
echo"<pre>";
print_r($_POST);
echo "</pre>";

}
?>