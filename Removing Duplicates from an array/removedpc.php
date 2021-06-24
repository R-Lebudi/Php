<?php

$test = array("1","1","2","2","3","3","3","4","5","6","7","7");
for ($x = 0; $x < count($test);$x++) {
	echo $test[$x];
}

echo "<br>";

for ($i = 0; $i < count($test);$i++){
	$j = $i;
	$temp = $test[$i];
	
	for ($k = 0; $k < count($test);$k++){
		if ($j != $k){
			if ($temp == $test[$k]){
				$test[$k] = "";
			}
		}
	}
}

for ($x = 0; $x < count($test);$x++) {
	echo $test[$x];
}

?>