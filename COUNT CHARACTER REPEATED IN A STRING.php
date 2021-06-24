<html>

<head>
<title>Count number of characters repeated in a string</title>
</head>

<body>

<?php 

$string = "This is interesting to learn in Php";

echo "<pre>";
echo $string;
echo "<br />";

echo "<br />";
$mode2 = count_chars($string,1);
foreach ($mode2 as $k=> $v){
	echo chr($k)." is repeated for ". $v. " times<br/>";
}

?>

</body>

</html>
