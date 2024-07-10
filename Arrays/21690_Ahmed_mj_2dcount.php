<?php

$sequence = ["Memon",7,8,7,9,6,5,[3,4,5],[100,200,300],"Hidaya","Trust"];
$count = 0;

echo "<pre>";
print_r( $sequence );
echo "</pre>";

foreach ($sequence as $keys1 => $values){
	if(gettype($values) == "integer"){
	$count++;
	echo "$values found at [$keys1]";
	echo"<br>";

}


	if(is_array($values)){
		
		foreach($values as $keys2 => $values2){
			if(gettype($values2) == "integer"){
				$count++;

				echo "$values2 found at[$keys1][$keys2]";
				echo "<br>";
				}
		
		}

} 
}
echo "Total integer values of the 2D array are:".$count;



?>