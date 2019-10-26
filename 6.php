<?php

$data = [
			['a', 'c', 'b', 'e', 'd'],
			['g', 'e', 'f']
		];

$datalain = [
				['g', 'h', 'i', 'j'],
				['a', 'c', 'b', 'e', 'd'],
				['g', 'e', 'f']

			];

function cmp($a, $b){
    return (count($a) - count($b));
}


function sortArray($data) {
	usort($data, 'cmp');
	
	for ($i=0; $i<count($data); $i++) { 
		for ($j=0; $j<count($data[$i]) ; $j++) { 
			echo $data[$i][$j];
		}
		echo "<br>";
	}
}

echo sortArray($data);
echo "<br>";
echo sortArray($datalain);
?>