<?php
//membuat fungsi HitungKembalian
function HitungKembalian($total_belanja, $jumlah_uang)
{
	// mengecek apakah dapat cashback atau tidak
	if ($total_belanja > 200000) {
		$cashback = $total_belanja * 0.1;
	}else{
		$cashback = 0;
	}


	// menghitung uang kembalian
	$kembalian = $jumlah_uang - $total_belanja;
	$total_kembalian = $kembalian + $cashback;
	
	$jumlah = 0;
	while ($total_kembalian >= 50000) 
	{
			$jumlah++;
			$total_kembalian = $total_kembalian - 50000;
	}

	if ($jumlah > 0) {
	echo "<li>".$jumlah." X 50000 </li>";
	}	

	$jumlah = 0;
	while ($total_kembalian >= 20000) 
	{
			$jumlah++;
			$total_kembalian = $total_kembalian - 20000;
	}
	if ($jumlah > 0) {
	echo "<li>".$jumlah." X 20000 </li>";
	}	

	$jumlah = 0;
	while ($total_kembalian >= 10000) 
	{
			$jumlah++;
			$total_kembalian = $total_kembalian - 10000;
	}
	if ($jumlah > 0) {
	echo "<li>".$jumlah." X 10000 </li>";
	}	

	$jumlah = 0;
	while ($total_kembalian >= 5000) 
	{
			$jumlah++;
			$total_kembalian = $total_kembalian - 5000;
	}
	if ($jumlah > 0) {
	echo "<li>".$jumlah." X 5000 </li>";
	}	

	if ($total_kembalian < 5000) {
		echo "<li>".$total_kembalian." Disumbangkan karena tidak ada pecahan dibawah 5000 </li>";
	}
}

echo HitungKembalian(220000, 250000);
?>