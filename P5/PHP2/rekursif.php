<?php
//tampilkanHaloDunia - Langkah 1
    // function tampilkanHaloDunia(){
    //     echo "Halo dunia! <br>";
    //     tampilkanHaloDunia();
    // } 
    // tampilkanHaloDunia();

//Perulangan for - langkah 3
    echo "<h3>Perulangan For</h3>";
    for ($i=0; $i <= 25 ; $i++) { 
        echo "Perulangan ke-{$i}<br>";
    }
    echo "<hr>";
//tampilkanAngka - Langkah 4
    echo "<h3>Konsep Rekursif</h3>";
    function tampilkanAngka(int $jumlah, int $indeks = 1){
        echo "Perulangan ke-{$indeks} <br>";
        //panggil diri sendiri selama $indeks <= jumlah
        if ($indeks < $jumlah) {
            tampilkanAngka($jumlah, $indeks + 1);
        }
    }
    tampilkanAngka(20);
    echo "<hr>";
?>