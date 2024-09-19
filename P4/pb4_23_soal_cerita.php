<?php 
$hargaProduk    = 120000;
$diskon         = 20;

echo "======== Perhitungan Diskon ========";
echo "<br>Harga Produk : $hargaProduk";
if ($hargaProduk > 100000) {
    $totalDiskon = ($diskon / 100) * $hargaProduk;
    $totalHarga = $hargaProduk - $totalDiskon;
    echo "<br>Anda Mendapatkan Diskon sebesar $diskon %";
}
echo "<br>Total Harga:  $hargaProduk - $totalDiskon  = $totalHarga";
?>