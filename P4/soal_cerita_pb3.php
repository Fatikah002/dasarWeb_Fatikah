<?php 
$jmlKursi     = 45;
$kursiTerpakai  = 28;
$sisaKursi = 45-28;
$hasilAkhir = ($jmlKursi - $kursiTerpakai) * 100 /100;

echo "Jumlah kusri: ". $jmlKursi ;
echo "<br>Kursi terpakai: ". $kursiTerpakai;
echo "<br>Sisa kursi: {$sisaKursi}" ; 
echo "<br>Sisa kursi (persentase): {$hasilAkhir} %" ; 
?>