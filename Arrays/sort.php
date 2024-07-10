<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Intersection Assignments</title>
 	 </head>
 <body> 
 	 <center>
 	 	 <h1 id="id1">Intersection Assignment</h1>
         


 	 	 <?php 

$array_one = array(26, 31, 47, 54, 27, 8, 44, 23, 45, 67, 12);
$array_two = array(34, 31, 4, 27, 8, 44, 54, 45, 87, 23, 45, 67, 12);
$intersection[] ="";
  
// Find intersection
for ($i = 0; isset($array_one[$i]); $i++) {
    if (isset($array_one[$i])) {
        for ($j = 0; isset($array_two[$j]); $j++) {
            if ($array_one[$i] == $array_two[$j]) {
                $intersection[] = $array_one[$i];
                break;
            }
        }
    }
}

?>
    <table id="id2" border="2">
         	<tr id="id4">
         		<th>Array One</th>
         		<td><?php 
         		foreach($array_one as $element){
         			echo $element. "
         			";
         		}


         	?></td>
         	</tr>
         	<tr id="id3">
         		<th>Array two</th>
         		<td><?php 
         		foreach($array_two as $element){
         			echo $element. "
         			";
         		}


         	?></td>
         	</tr>
         	<tr id="id5">
         		<th id="id6">Intersection Array</th>
         		<td><?php 
         		foreach($intersection as $element){
         			echo $element. "
         			";
         		}


         	?></td>
         	</tr>
         </table>

   
 	 </center>
 	
 
 </body>
 </html>
