<?php
	      // echo"<pre>";
              // print_r($_POST);
              // echo"</pre>";

?>
<!DOCTYPE HTML>
<html>
     <head>
           <title>..:: HTML DAY 3 ::..</title>
     </head>
<body>
	<h1 align="center">..::Page 2 ::..</h1>
	<br/>
	<hr/>


      <table align="center" cellspacing="5" cellpadding="10">
            <form method="POST" action="page3.php">
                <tr>
                    <th><label>Gender</label></th>
                    <td>
                       Male<input type="radio" name="gender" value="Male">
                       Female<input type="radio" name="gender" value="Female">
                    </td>
                </tr>
                <tr>
                    <th><label>Address</label></th>
                    <td>
                        <textarea name="address">
                        </textarea>
                    </td>
                </tr>
                <tr>
                     <td>
                          <input type="hidden" name="first_name" 
                          value="<?php echo isset($_POST["first_name"])?$_POST["first_name"]:"";?>">
                     </td>
                     <td>
                        <input type="hidden" name="last_name" 
                        value="<?php echo isset($_POST["last_name"])?$_POST["last_name"]:"";?>">
                     </td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input type="submit" name="submit" value="submit"></td>
                </tr>
            </form>
      </table>
	

</body>
</html>