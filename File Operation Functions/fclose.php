<?php

$file = fopen("hey.tmp", "r");
$data = fread($file,8); // reads string from 1st character to specified number of a character to stop reading at, including white space. 
echo $data;

echo "<br />";

$file = fopen("hey.tmp", "r");
$size = filesize("hey.tmp");
$data = fread($file,$size);
echo $data;
fclose($file);

?>