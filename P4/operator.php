<?php 
$a = 10;
$b = 5;

$hasilTambah    = $a + $b;
$hasilKurang    = $a - $b;
$hasilKali      = $a * $b;
$hasilBagi      = $a / $b;
$sisaBagi       = $a % $b;
$pangkat        = $a ** $b;

echo "Variabel a: {$a} <br> Variabel b: {$b}<br> ";
echo "<p>-- Operator Aritmatika -- " ;
echo "<br>Hasil tambah       : " .$hasilTambah;
echo "<br>Hasil kurang   : " .$hasilKurang;
echo "<br>Hasil kali     : " .$hasilKali;
echo "<br>Hasil bagi     : " .$hasilBagi;
echo "<br>Sisa bagi      : " .$sisaBagi;
echo "<br>Pangkat        : " .$pangkat;

$hasilSama           = $a == $b;
$hasilTidakSama      = $a != $b;
$hasilLebihKecil     = $a < $b;
$hasilLebihBesar     = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
echo "<p>-- Operator Perbandingan -- " ;
echo "<br>Hasil Sama      : " .$hasilSama;
echo "<br>Hasil tidak sama: " .$hasilTidakSama;
echo "<br>Hasil lebih kecil: " .$hasilLebihKecil;
echo "<br>Hasil lebih besar: " .$hasilLebihBesar;
echo "<br>Hasil lebih kecil sama: " .$hasilLebihKecilSama;
echo "<br>Hasil lebih besar sama: " .$hasilLebihBesarSama;

$hasilAnd   = $a && $b;
$hasilOr    = $a || $b;
$hasilNotA  = !$a;
$hasilNotB  = !$b;
echo "<p>-- Operator Logika -- " ;
echo "<br>Hasil AND     : " .$hasilAnd;
echo "<br>Hasil OR    : " .$hasilOr;
echo "<br>Hasil NOT A    : " .$hasilNotA;
echo "<br>Hasil NOT B    : " .$hasilNotB;

$hasilPenjumlahan   = $a += $b;
$hasilPengurangan   = $a -= $b;
$hasilPerkalian     = $a *= $b;
$hasilPembagian     = $a /= $b;
$sisaHasilBagi      = $a %= $b;
echo "<p>-- Operator Penugasan -- " ;
echo "<br>Hasil penjumlahan  : " .$hasilPenjumlahan;
echo "<br>Hasil pengurangan : " .$hasilPengurangan;
echo "<br>Hasil perkalian   : " .$hasilPerkalian;
echo "<br>Hasil pembagian   : " .$hasilPembagian;
echo "<br>Sisa hasil bagi   : " .$sisaHasilBagi ;

$hasilIndentik      = $a === $b;
$hasilTidakIdentik  = $a !== $b;
echo "<p>-- Operator Identik -- " ;
echo "<br>Hasil identik          : " .$hasilIndentik;
echo "<br>Hasil tidak identik   : " .$hasilTidakIdentik;

?>