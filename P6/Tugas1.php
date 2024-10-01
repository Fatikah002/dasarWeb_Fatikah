<html>
    <head>
        <style>
            ul {
                padding-left: 40px;
            }
        </style>
    </head>
    <body>
        <h1>Data Mahasiswa array multidimensi</h1>
        <ul>
            <?php
            $dataMhs = array(
                array("Fatikah", 123456, "Teknik Kimia", "fatikah@gmail.com"),
                array("Salsabilla", 654321, "Teknik Listrik", "Salsabilla@gmail.com")
            );
            for ($i = 0; $i < count($dataMhs); $i++) {
                echo "<li>Nama      : " . $dataMhs[$i][0] . "<br>";
                echo "<li>NIM       : " . $dataMhs[$i][1] . "<br>";
                echo "<li>Jurusan   : " . $dataMhs[$i][2] . "<br>";
                echo "<li>Email     : " . $dataMhs[$i][3] . "<br><br>";
            }
            ?>
        </ul>
    </body>
</html>