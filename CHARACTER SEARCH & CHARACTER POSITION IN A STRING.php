<html>

<head>
<title>Count number of characters in a string</title>
</head>

<body>

<?php 

$string = "This is interesting to learn in Php";

echo "<pre>";
echo $string;
echo "<br />";
echo substr_count($string, "e");

?>
<br>
<br>

<?php 

$string = "This is interesting to learn in Php";

echo "<pre>";
echo $string;
echo "<br />";
echo substr_count($string, "e", 0,18);

// 0,9 is the position in the string where to start (0) & end (,9) searching for the character

?>

</body>
</html>
