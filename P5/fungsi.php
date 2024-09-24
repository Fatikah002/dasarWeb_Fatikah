<?php
//FUNGSI
    // function perkenalan(){
    //     echo "Assalamualaikum, ";
    //     echo "Perkenalkan, nama saya Fatikah<br/>";
    //     echo "Senang berkenalan dengan Anda<br/>";
    // } 
    // //memanggil fungsi yang sudah dibuat
    // perkenalan();
    // perkenalan();

//Fungsi dengan Parameter
    // function perkenalan($nama, $salam){
    //     echo $salam.", ";
    //     echo "Perkenalkan, nama saya ".$nama."<br/>";
    //     echo "Senang berkenalan dengan Anda<br/>";
    // }
    // //memanggil fungsi yang sudah dibuat
    // perkenalan("Fatikah", "Hallo");
    // echo "<hr>";
    // $saya = "Fatikah";
    // $ucapanSalam = "Selamat Pagi";
    // //memanggil lagi
    // perkenalan($saya, $ucapanSalam);

//Fungsi dengan Nilai Default
    //membuat fungsi
    function perkenalan($nama, $salam="Assalamualaikum"){
        echo $salam.",";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }
    //memanggil fungsi yang sudah dibuat
    perkenalan("Fatikah", "Hallo");
    echo "<hr>";
    $saya = "Fatikah";
    $ucapanSalam = "Selamat Pagi";
    //memanggil lagi tanpa mengisi parameter salam
    perkenalan($saya);

?>
