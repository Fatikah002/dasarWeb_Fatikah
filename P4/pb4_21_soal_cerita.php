<?php 
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;
$nilaiTertinggi = $nilaiSiswa[0] ;
$nilaiTerendah= $nilaiSiswa[0];

echo "Data Nilai Siswa<br>";
for ($i=1; $i < count($nilaiSiswa); $i++) { 
   echo "Siswa $i = $nilaiSiswa[$i] <br>";

   if ($nilaiSiswa[$i] > $nilaiTertinggi) {
    $nilaiTertinggi = $nilaiSiswa[$i];
    
   }

   if ($nilaiSiswa[$i] < $nilaiTerendah) {
    $nilaiTerendah = $nilaiSiswa[$i];
    
   }
}

foreach ($nilaiSiswa as $nilai) {
    $totalNilai += $nilai;
}
echo "Total nilai siswa adalah : $totalNilai <br>";


 $totalNilai -= ($nilaiTertinggi + $nilaiTerendah);
 $rataRataNilai = $totalNilai / 8;
 
 echo "Nilai Tertinggi: $nilaiTertinggi <br>";
 echo "Nilai Terendah: $nilaiTerendah <br>";
 echo "Rata - rata nilai siswa adalah : $rataRataNilai <br>";
?>