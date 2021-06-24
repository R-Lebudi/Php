<html>
<head>
<title>Multiplication Table</title>
</head>

<body>

<?php

echo "<table border width=400px height=400px>";

for ($x = 1; $x <= 10; $x++) {
	echo "<tr>";
	
	for ($y = 1; $y <=10; $y++) {
		echo "<td>".$x * $y."</td>";
	}
	
	echo "</tr>";
}

echo "</table>";
?>

</body>

</html>
