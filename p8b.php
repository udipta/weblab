<?php
	$a = array(array(1,2),array(3,4));
	$b = array(array(10,20),array(30,40));

	$m=count($a);
	$n=count($a[0]);

	$p=count($b);
	$q=count($b[0]);


	echo "the first matrix:<br/>";

	for ($row = 0; $row < $m; $row++) {
		for ($col = 0; $col < $n; $col++)
			echo " ".$a[$row][$col];
		echo "<br/>";
	}

	echo "the second matrix:<br/>";

	for ($row = 0; $row < $p; $row++) {
		for ($col = 0; $col < $q; $col++)
			echo " ".$b[$row][$col];
		echo "<br/>";
	}


	echo "the transpose for the first matrix is:<br/>";

	for ($row = 0; $row < $m; $row++) {
		for ($col = 0; $col < $n; $col++)
			echo " ".$a[$col][$row];
		echo "<br/>";
	}


	if(($m===$p) and ($n===$q)) {
		echo "the addition of matrices is:"."<br/>";

		for ($row = 0; $row < $m; $row++) {
			for ($col = 0; $col < $q; $col++)
				echo " ".$a[$row][$col]+$b[$row][$col]." ";
			echo "<br/>";
		}
	}

	if($n===$p){
		echo " The multiplication of matrices: <br/>";
		
		$result=array();
		
		for ($i=0; $i < $m; $i++) {
			for($j=0; $j < $q; $j++){
				$result[$i][$j] = 0;
				
				for($k=0; $k < $n; $k++)
					$result[$i][$j] += $a[$i][$k] * $b[$k][$j];

				echo " ".$result[$i][$j];
			}
			echo "<br/>";
		}
	}
?>