<?php

$file = fopen("today.txt", "w");
$text = ("2021 in php");
fwrite($file,$text);

?>