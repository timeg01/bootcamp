<?php
$dataKey = ['dumb', 'ways', 'the', 'best'];

//fungsi Pengecekan
function Check($dataKey, $word)
{
	//menjumlah data array pada variabel dataKey
	$jumlah = count($dataKey);

	//melakukan pengulangan untuk mengecek apakah ada kata yang sama
	for($i=0; $i<$jumlah; $i++)
	{
		if (stristr($word, $dataKey[$i])) {
			echo "$dataKey[$i] => true";
			echo "<br>";
		}else{
			echo "$dataKey[$i] => false";
			echo "<br>";
		}
	}
}

// menjalankan fungsi Check
echo Check($dataKey, 'dumbways best');
?>