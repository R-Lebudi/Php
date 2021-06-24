<?php
$link = mysqli_connect('localhost', 'root', '','test2');

$sql = "SELECT * FROM `user`";

$records = $link->query($sql);

?>

<html>
<head>
<title>Users Data</title>
</head>

<body>

	<table width="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
		<th>ID</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>DOB</th>
	</tr>
	
	<?php
	
		while($user = mysqli_fetch_assoc($records)){
			echo "<tr>";
			
			echo "<td>".$user['ID']."</td>";
			
			echo "<td>".$user['Firstname']."</td>";
			
			echo "<td>".$user['Lastname']."</td>";
			
			echo "<td>".$user['DOB']."</td>";
			
			echo "<tr>";
		}
	
	?>
	
	</table>
	
</body>
</html>