<html>
<head>
<title>Schedule Switch Statement</title>
</head>

<body>

<?php
$today =date("D");
switch($today) {
	case "Fri":
		echo"Today is Friday.Go out Clubbing.";
		break;
	case "Sat":
		echo"Today is Saturday.Attend a Spin City event.";
		break;
	case "Sun":
		echo"Today is Sunday.Go to Church.";
		break;
	case "Mon":
		echo"Today is Monday.Attend Php class.";
		break;
	default:
		echo"No information available for the day.";
		break;
}
?>

</body>
</html>