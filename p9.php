<?php
	$states = "Mississippi Alabama Texas Massachusetts Kansas";
	$statesArray = [];
	$states1 = explode(' ',$states);
	
	echo "Original Array :<br>";
	foreach ( $states1 as $i => $value )
		print("STATES[$i]=$value<br>");

	// end with 'xas'
	foreach($states1 as $state) {
		if(preg_match( '/xas$/', ($state)))
			$statesArray[0] = ($state);
	}

	//begin with 'k' and end with 's' [CaseInsensitive]
	foreach($states1 as $state) {
		if(preg_match('/^k.*s$/i', ($state)))
			$statesArray[1] = ($state);
	}
	
	//begin with 'M' and end with 's'
	foreach($states1 as $state) {
		if(preg_match('/^M.*s$/', ($state)))
			$statesArray[2] = ($state);
	}

	//end with 'a'	
	foreach($states1 as $state){
		if(preg_match('/a$/', ($state)))
			$statesArray[3] = ($state);
	}
	
	echo "<br><br>Resultant Array :<br>";
	foreach ( $statesArray as $array => $value )
		print("STATES[$array]=$value<br>");
?>