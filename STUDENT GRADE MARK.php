<html>
<head>
<title>Student Grade Marks</title>
</head>

<body>

<?php

$SauerMarks = 75;
$VonMarks = 44;
$TroyMarks = 60;
$PaulMarks = 62;
$JacobMarks = 70;

echo"<Table Border = 1>
<tr><th>Name</th> <th>Marks</th></tr>
<tr><td>Sauer Jeppe</td> <td>$SauerMarks</td></tr>
<tr><td>Von Weilligh</td> <td>$VonMarks</td></tr>
<tr><td>Troy Commisioner</td> <td>$TroyMarks</td></tr>
<tr><td>Paul Krugger</td> <td>$PaulMarks</td></tr>
<tr><td>Jacob Maree</td> <td>$JacobMarks</td></tr>
</Table>";

echo"<table border = 1>
<tr><th>Mark Range</th> <th>Grade</th></tr>
<tr><td>70+</td> <td>Distinction</td></tr>
<tr><td>50 - 69</td> <td>Passed</td></tr>
<tr><td>0 - 49</td> <td>Failed</td></tr>
</table>";

if (($SauerMarks >=70) && ($SauerMarks <=100)) {
	echo "Sauer Jeppe scored a Distinction";
}else if(($SauerMarks >=50) && ($SauerMarks <=69)) {
	echo "Sauer Jeppe Passed";
}else if (($SauerMarks >=0) && ($SauerMarks <=49)) {
	echo "Sauer Failed";
}else {
	echo "Invalid Marks";
}
?>

</body>
</html>