<!DOCTYPE html>
<html>
<head>
	<title>Membuat Serial Number</title>
</head>
<body>
	<form action="" method="post">
		<table border="0" cellspacing="0">
			<tr>
				<td><label for="jumlah">Jumlah Serial</label></td>
				<td>:</td>
				<td><input type="number" name="jumlah" id="jumlah"></td>
			</tr>
			<tr>
				<td>
					<button type="Submit" name="submit">Generate</button>
					<button type="Reset">Reset</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php

function buatSN(){ //fungsi penggenerate serial number
$template = 'XX99-XX99-99XX-99XX';//bentuk
$k = strlen($template);
$sernum ='';


	for ($i=0; $i<$k; $i++)
	{
		switch($template[$i]) {
		case 'X': $sernum .= chr(rand(65,90)); break;
		case '9': $sernum .= rand(0,9); break;
		case '-': $sernum .= '-'; break;
		}
	}
return $sernum;
}

// mengambil inputan berdasarkan form
if (isset($_POST["submit"])) {
	$jumlah = $_POST["jumlah"];
}

for($i=1;$i<=$jumlah;$i++){ //looping untuk membuat serial number
	echo buatSN(). "<br>";
}

?>