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
echo "<br>Hasil tambah       : " .$hasilTambah;
echo "<br>Hasil kurang   : " .$hasilKurang;
echo "<br>Hasil kali     : " .$hasilKali;
echo "<br>Hasil bagi     : " .$hasilBagi;
echo "<br>Sisa bagi      : " .$sisaBagi;
echo "<br>Pangkat        : " .$pangkat;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
echo "<p>Hasil Sama      : " .$hasilSama;
echo "<br>Hasil tidak sama: " .$hasilTidakSama;
echo "<br>Hasil lebih kecil: " .$hasilLebihKecil;
echo "<br>Hasil lebih besar: " .$hasilLebihBesar;
echo "<br>Hasil lebih kecil sama: " .$hasilLebihKecilSama;
echo "<br>Hasil lebih besar sama: " .$hasilLebihBesarSama;

?>