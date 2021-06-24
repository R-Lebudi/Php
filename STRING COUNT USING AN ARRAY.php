<html>

<head>
<title>Count number of words in a string using an Array</title>
</head>

<body>

<?php 

$string = "This is interesting to learn in Php";

echo "<pre>";
echo $string;
echo "<br />";
echo str_word_count($string);

?>
<br>

<?php 

$string = "This is interesting to learn in Php";

echo "<pre>";
$mode1 = str_word_count($string, 1);
echo "<br />";
print_r($mode1);

// 1 in the gives the array number of the word

?>
