<?php

//membuat fungsi cetak gambar
function CetakGambar($params)
{
	echo "- - - panjang - - -";
	echo "<br>";
	
	for ($i=1; $i<=$params ; $i++) { 
		for ($j=1; $j<=$params; $j++) { 
			if ($i % 2 == 0) {
				if ($j == 1 || $j == $params) {
					echo " * ";
				}else{
					echo " = ";
				}
			}else{
				echo " * ";
			}
		}
		echo "<br>";
	}
}

echo CetakGambar(5);
?>