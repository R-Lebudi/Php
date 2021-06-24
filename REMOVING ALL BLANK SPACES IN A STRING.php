<html>

<head>
<title>Removing white spaces in a string</title>
</head>

<body>

<?php 

$old = "This is interesting to learn in Php";

$new = preg_replace('/\s+/','',$old);

echo $new;

?>

</body>
</html>