<!DOCTYPE HTML>
<html>
     <head>
           <title>..:: HTML DAY 3 ::..</title>
     </head>
<body>
	<h1 align="center">..::Loop Process ::..</h1>
	<br/>
	<hr/>	

	<?php
		if(isset($_POST["submit"])){

                 //echo "<pre>";
                  //print_r($_POST);
                 //echo "</pre>";  

		 $count = $_POST["count"];
     
	?>
   
           <table>
                 <form>

		<?php
                       for($i=1; $i<=$count; $i++){
                 ?>
                     <tr>
                         <th><label>NAME :<?php echo $i; ?></label></th>
                         <td><input type="text" name="first_name<?php echo $i; ?>"></td>
                     </tr>
                     <tr>
                         <th><label>Last NAME :<?php echo $i; ?></label></th>
                         <td><input type="text" name="last_name<?php echo $i; ?>"></td>
                     </tr>
               <?php
                  }
               ?>
                 </form>
           </table>

	<?php
             }
         ?>



</body>
</html>