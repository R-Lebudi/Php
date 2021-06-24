<html>

<head>

<title>Odd numbers & Even numbers</title>
</head>

<body bgcolor="pink">
<div align="center">
<h1><u>Odd and Even program</u></h1></div>


<?php

$i = 1;

while ($i <= 100){
        if ($i % 2 == 0){
           echo $i . " is an even number.<br>";
        }
		if ($i % 2 == 1){
           echo $i . " is an odd number.<br>";
		}
		$i = $i + 1;
    }

?>

</body>

</html>
