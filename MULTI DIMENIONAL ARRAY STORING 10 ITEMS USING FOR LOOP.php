<html>
<head>
<title>Multi-Dimensional Arrays</title>
</head>

<body>

<?php
 
$car=array(
		    array(
			   array("BMW",123,597),
			   array("MERCEDES",120,380),
			   array("AUDI",100,200)
			),
			array(
				array("TOYOTA",50,150),
				array("NISSAN",40,60),
				array("HONDA",30,70)
			),
			array(
				array("FORD",20,80),
				array("FIAT",15,75),
				array("KIA",10,90)
			),
			array(
				array("McLAREN",90,30)
			)
);
 
echo "<table border=1 cellpadding=0 cellspacing=0>";
echo "<tr>";
echo "<th>Brand Name</th>";
echo "<th>Number of stock in store</th>";
echo "<th>Quantity Sold</th>";
echo "</tr>";


for($i=0; $i<3; $i++)
{
	echo "<tr>";
	for($j=0; $j<3; $j++)
	{
		for($d=0;$d<3;$d++)
		{
			echo "<td>".$car[$i][$j][$d]."</td>";
		}
		echo "</tr>";	
	}	
}
echo "</table>";

?>

</body>
</html>
