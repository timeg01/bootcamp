<!DOCTYPE html>
<html>
<head>
	<title>Potongan Harga</title>
</head>
<body>
	<form action="" method="post">
		<table border="0" cellspacing="0">
			<tr>
				<td><label for="kode_voucher">Kode Voucher</label></td>
				<td>:</td>
				<td><select name="kode_voucher" required="">
					<option value="">- Pilih -</option>
					<option value="DumbWaysAsik">DumbWaysAsik</option>
					<option value="DumbWaysMantap">DumbWaysMantap</option>
				</select></td>
			</tr>
			<tr>
				<td><label for="biaya">Biaya Pembayaran</label></td>
				<td>:</td>
				<td><input type="number" name="biaya" id="biaya"></td>
			</tr>
			<tr>
				<td>
					<button type="Submit" name="submit">Submit</button>
					<button type="Reset">Reset</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
// mengambil inputan berdasarkan form
if (isset($_POST["submit"])) {
	$kode_voucher = $_POST["kode_voucher"];
	$biaya = $_POST["biaya"];
	echo HitungVoucher($kode_voucher, $biaya);
}


// membuuat fungsi hitung voucher berdasarkan voucher yang dipilih
function HitungVoucher($kode_voucher, $biaya)
{

	if ($kode_voucher == "DumbWaysAsik") {
		
		if ($biaya >= 20000) {
			$diskon = $biaya * 0.5;
			if ($diskon > 20000) {
				$diskon = 20000;
			}
		$total_bayar = $biaya - $diskon;
		$Kembalian = $biaya - $total_bayar;
		echo "<br>";
		echo "<br>";
		echo "<li> Uang yang harus dibayar : ".$total_bayar ."</li>";
		echo "<li> Diskon : ". $diskon;
		echo "<li> Kembalian : ". $Kembalian."</li>" ;

		}else {

		$total_bayar = $biaya;
		$diskon = 0;
		$Kembalian = $biaya - $total_bayar;
		echo "<br>";
		echo "<br>";
		echo "Voucher DumWaysAsik tidak dapat digunakan, karena nominal pembayaran tidak memenuhi persyaratan";
		echo "<li> Uang yang harus dibayar : ".$total_bayar ."</li>";
		echo "<li> Diskon : ". $diskon;
		echo "<li> Kembalian : ". $Kembalian."</li>" ;
		}
	}elseif ($kode_voucher == "DumbWaysMantap") {

		if ($biaya >= 50000) {
			$diskon = $biaya * 0.3;
			if ($diskon > 40000) {
				$diskon = 40000;
			}
		$total_bayar = $biaya - $diskon;
		$Kembalian = $biaya - $total_bayar;
		echo "<br>";
		echo "<br>";
		echo "<li> Uang yang harus dibayar : ".$total_bayar ."</li>";
		echo "<li> Diskon : ". $diskon;
		echo "<li> Kembalian : ". $Kembalian."</li>" ;

		}else {

		$total_bayar = $biaya;
		$diskon = 0;
		$Kembalian = $biaya - $total_bayar;
		echo "<br>";
		echo "<br>";
		echo "Voucher DumWaysMantap tidak dapat digunakan, karena nominal pembayaran tidak memenuhi persyaratan";
		echo "<li> Uang yang harus dibayar : ".$total_bayar ."</li>";
		echo "<li> Diskon : ". $diskon;
		echo "<li> Kembalian : ". $Kembalian."</li>" ;
		}
	}
}
?>
