<?php

$link = mysqli_connect('localhost', 'root', '', 'tutorial');

$db = mysqli_select_db($link,'`tutorial`');

//$sql = "CREATE DATABASE `tutorial`";
// already created the database

//echo "Table Created!";

/* CREATING PART
$sql = ("CREATE TABLE `cci`
(
id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
firstname varchar(15) NOT NULL,
gender varchar(6)NOT NULL,
age int(15) NOT NULL,
PRIMARY KEY(id) 
)
");

$records = $link->query($sql);

if ($link->query($sql) === TRUE){
	echo "Table people created successfully";
}
else{
	echo "error in creating table: " . $link->error;
}
*/

//   INSERT PART
$sql = ("INSERT INTO `cci` 
VALUES('tyt','Female','29')
");

$records = $link->query($sql);

if ($link->query($sql) === TRUE){
	echo "data inserted successfully";
}
else{
	echo "error in inserting data into table: " . $link->error;
}

$link->close();



/* UPDATING PART
$sql = ("UPDATE `cci` SET age = '10' WHERE id = 2");

$records = $link->query($sql);

if ($link->query($sql) === TRUE){
	echo "data updated successfully";
}
else{
	echo "error in updating data from table: " . $link->error;
}

$link->close();
*/
?>