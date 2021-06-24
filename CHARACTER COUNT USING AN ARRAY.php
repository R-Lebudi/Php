<html>

<head>
<title>Count number of characters in a string using an Array</title>
</head>

<body>

<?php 

$string = "This is interesting to learn in Php";

echo "<pre>";
echo $string;
echo "<br />";

echo "<br />";
$mode2 = count_chars($string,1);
//print_r($mode2);
foreach ($mode2 as $k=> $v){
	echo chr($k)." is repeated for ". $v. " times<br/>";
}

echo "<br />";
$mode1 = count_chars($string,0);
print_r($mode1);

?>

</body>
</html>