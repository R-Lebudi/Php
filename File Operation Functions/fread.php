<?php

$file = fopen("hey.tmp", "r");
$data = fread($file,5);
echo $data;

echo "<br />";

$file = fopen("hey.tmp", "r");
$size = filesize("hey.tmp");
$data = fread($file,$size);
echo $data;

?>