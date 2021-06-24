<html>
<head>
<title>Using Fopen to store data into a text file</title>
<head>

<body>

<?php

	// CHECKING WHETHER THE SUBMIT BUTTON IS CLICKED

if (isset($_POST['submit']))
{
		// SAVING NAME AGE VARIABLES
	$name = $_POST['name'];
	$age = $_POST['age'];
	
		// CREATING AND OPENING A TEXT FILE
	$file = fopen("test.txt","w+") or die("file not open");
	
	$s = $name.", ".$age."\n";
	
		//WRITES SINGLE LINE TO THE FILE
	fputs($file, $s) or die("Data not write");
	
		// CLOSING THE FILE
	fclose($file);
}

?>

		// HTML FILE RECEIVES DATA FROM TEXTBOX (NAME AND AGE)
	
	<center>
		<form action="#" method="post">
			Name: <input type="text" name="name" ><br>
			Age:  <input type="text" name="age" ><br>	
			<input type="submit" name="submit" value="Write to File"><br>
		</form>
	</center>

</body>
</html>