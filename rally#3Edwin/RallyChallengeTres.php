<?php
$array = [1, 2, "Second", "Third", true, false];

foreach ($array as $value) {

	if (is_string($value)) {
		# code...
		
		echo($value)."\n";
	}
}

?>