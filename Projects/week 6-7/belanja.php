<?php
$barang=array("Keyboard", "Mouse", "Monitor");
$harga=array(10, 5, 20);
$jumlah_total=3;
$jumlah_satuan=array(2, 3, 4);
$member=true;
$diskon=0;
$total_diskon=0;
$total_harga=0;
$total_bayar=0;
$i=0;
$n=0;

echo "Apakah pembeli sebagai Member?: ";
if($member==true)
	echo "ya";
else
	echo "tidak";
echo "<br> ";
echo "<br>Barang yang dibeli:";

for($i;$i<$jumlah_total;$i++)
{
	$n++;
	echo "<br>Barang $n:";
	echo "<br>Barang = $barang[$i]";
	echo "<br>Harga = $harga[$i] \$";
	echo "<br>Jumlah = $jumlah_satuan[$i] buah";
	if($member==true)
		$diskon=$harga[$i]*0.05;
	echo "<br>Diskon = $diskon \$<br>";
	$total_harga+=$harga[$i];
	$total_diskon+=$diskon;
}

$total_bayar=$total_harga-$total_diskon;
echo "<br>Total Harga = $total_harga \$";
echo "<br>Diskon Untuk Member = $total_diskon \$";
echo "<br>Harga yang harus dibayar = $total_bayar \$";
?>