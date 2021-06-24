<html>

<head>
<title>SetType function</title>
</head>

<body>

<?php 

$strVar = "13";
$intVar = 13;
$dblVar = 13.0;
$booVar = true;

echo gettype($strVar);
echo "<br>";

SetType($strVar, "int");
echo gettype($strVar);

?>

</body>

</html> 