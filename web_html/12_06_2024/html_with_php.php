<!DOCTYPE HTML>
<html>
      <head>
	   <title>..:: Php Integrated With HTML ::..</title>
      </head>
<body>

	<h1 align="center">..:: Php Integrated With HTML::..</h1>
	
	<?php
	    //for($i=1; $i<=5; $i++){
	?>
	<!--
	<ul type="circle">
	    <li>List Item</li>
	</ul>
	-->
	<?php
	  // }
	
	?>
	<!--
	<ul type ="square">
	<?php
	    //for($i=1; $i<=5; $i++){
	 ?>
	   <li>List Item</li>
	<?php
	   //} 
	?>
	</ul>

	-->

	<ol type ="1">
	<?php
	    for($i=1; $i<=10; $i++){
	   if($i== 3){
	       continue;
	    }
	?>
	   <li>List Item <?php echo $i; ?></li>
	<?php
	   }
	 ?>
	</ol>
	

	

	










</body>
</html>