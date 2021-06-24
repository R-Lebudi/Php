<html>

<head>
<title>Searching for a character position in a string</title>
</head>

<body>

<?php 

$sentence = "This is interesting to learn in php";
$needle = "ph";

$search = strpos($sentence , $needle);

if ($search === False) {
	echo "The string is not found";
}
else {
	echo "The position of the string is " . $search;
}

?>

</body>

</html>
