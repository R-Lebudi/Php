<?php
  // FILE OPERATION FUNCTIONS, HOW TO OPEN
// r = read
// r+ = read and write

// w = write
// w+ = write and read

// a = append/write
// a+ = append and read

// rb = read binary
// wb = write binary
// ab = append binary

$file = fopen("hey.tmp", "r");

while ($line = fgets($file)) {
	echo $line;
}

?>