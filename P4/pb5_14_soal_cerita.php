<?php
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

$totalNilai = 0;
$jumlahSiswa = count($daftarNilai);

foreach ($daftarNilai as $nilai) {
    $totalNilai += $nilai[1];
}

$rataRata = $totalNilai / $jumlahSiswa;
echo "========== DAFTAR NILAI SISWA MATEMATIKA ==========";
echo "<br>Rata - Rata Nilai Kelas: $rataRata <br>";
echo "Daftar Siswa dengan Nilai di Atas Rata - Rata:<br>";
foreach ($daftarNilai as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]} <br>";
    }
}
?>