<html>

<head>
<title>Replacing a word in a string</title>
</head>

<body>


<?php 
 
$apples = "fudge you noob!";

$new_apples = substr_replace($apples, '*****', 0,5);

echo $new_apples

// this substr_replace function replaces a word in a string
// first call the variable name then the alternative word is called

?>
<br>
<br>
<?php 

$apples = "fudge you noob! fudge this and fudge that!";

$new_apples = str_replace('fudge', '*****', $apples);

echo $new_apples 

// this str_replace function replaces a word in a string even if the word appears multiple times
// first call the original word then what alternative word to be placed then calls the variable name

?>

</body>
</html>