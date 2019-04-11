<?php
	// Processing here, using whatever from $_POST["variable name from form"]
	// Results can then be thrown to an output form, to a list, or handled uniquely

	$results = array(
		"nameString" => "Results 4: Name is still " . $_POST["Name"],
		"langString" => "Results 5: Language is still " . $_POST["Language"]
	);
	
	$results["list"] = [
		"Results 1: Name is " . $_POST["Name"],
		"Results 2: Language is " . $_POST["Language"],
		"Results 3: " . $_POST["KLOC"] . " thousand lines of code"
	];

	echo json_encode($results);
?>