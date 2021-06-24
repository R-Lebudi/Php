<html>

<head>
<meta charset = "UFT-8">
<title>Login Form</title>
</head>

<body>


<form method="POST">
	username: <input type="text" name="username"/><br>
	password: <input type="text" name="pass"/>
	<br>
	<input type="submit" value="Login"/>
</form>

<?php

$user = $_POST['username'];
$pass = $_POST['pass'];

	if ($user == 'Bond' && $pass == '007') {
		echo "You have logged in Successfully!";
	}
	else if ($user != 'Bond' || $pass == '007') {
		echo "Incorrect Username!";
	}
	else if ($user == 'Bond' || $pass != '007') {
		echo "Incorrect Password!";
	}
	else {
		echo "Invalid entries!";
	}

// the else part does not work!!!!!!!! need to be amended.

?>

</body>

</html>
