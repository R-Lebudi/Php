<html>

<head>
<title>Finding if an array value exists in an array</title>
</head>

<body>

<?php 

$Players = array("Ronaldo", "Benzema", "Modric", "Kroos", "Ramos", "Casimero");
$Players[] = "Real Madrid";

$superstar = "Modric";

	if (in_array($superstar, $Players)) {
		echo "Yes, " . $superstar . " is in the team.";
	}
	else {
		echo "Sorry, " . $superstar . " is unavailable in the team.";
	}
	
?>

</body>

</html>
