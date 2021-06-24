<?php

$capital = array("Italy" => "Rome", 
			  "Belgium" => "Brussels", 
			  "Denmark" => "Copenhagen", 
			  "Finland" => "Helsinki", 
			  "France" => "Paris",
			  "Slovakia" => "Bratislava",
			  "Slovenia" => "Ljubkjana", 
			  "Germany" => "Berlin", 
			  "Greece" => "Athens", 
			  "Ireland" => "Dublin", 
			  "Netherlands" => "Amsterdam",
			  "Portugal" => "Lisbon",
			  "Spain" => "Madrid", 
			  "Sweden" => "Stockholm", 
			  "United Kingdom" => "London", 
			  "Cyprus" => "Nicosia", 
			  "Lithuania" => "Vilnius",
			  "Czech Republic" => "Prague",
			  "Estonia" => "Tallin", 
			  "Hungary" => "Budapest", 
			  "Latvia" => "Riga", 
			  "Malta" => "Valetta", 
			  "Austria" => "Vienna",
			  "Poland" => "Warsaw");
			  
$country = array_search("Amsterdam", $capital);
if ($country){
echo "The capital of " ,$country ," is Amsterdam <br />";
}

$country = array_search("Athens", $capital);
if ($country){
echo "The capital of " ,$country ," is Athens <br />";
}	

$country = array_search("Berlin", $capital);
if ($country){
echo "The capital of " ,$country ," is Berlin <br />";
}
	
?>
