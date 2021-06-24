<html>

<head>
<title>Emai Verify</title>
</head>

<body>

<?php 

$email = "Lucas@gmail.com";
$needle = "@";

$search = strpos ($email, $needle);

if ($search === false) {
	echo "this is not a valid email";
}else {
	echo "This is a valid email";
}

// changing $needle char or string to verify the email

?>

</body>

</html>
