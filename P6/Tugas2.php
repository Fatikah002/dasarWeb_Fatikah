<html>
    <head>
        <style>
           table {
                width: 100%;
                border-collapse: collapse;
                margin: 20px 0;
                font-size: 18px;
              
            }
            th{
                padding: 10px;
                border: 1.5px solid #ddd;
                text-align: left;
            }
            td, ul{
                padding: 10px;
                border: 1.5px solid #ddd;
            }
        </style>
    </head>
    <body>
        <h1>Data Siswa</h1>
        <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
            <?php
            $dataSiswa = array(
                array("Andi", 15, "10A", "Malang"),
                array("Siti", 16, "10B", "Batu"),
                array("Budi", 15, "10A", "Dinoyo"),
                array("Anton", 25, "15A", "Dinoyo")
            );
            echo "<tr>";
            $totalUmur =0;
            for ($i=0; $i < count($dataSiswa) ; $i++) { 
                echo "<tr>";
                echo "<td>" . $dataSiswa[$i][0] . "</td>";
                echo "<td>" . $dataSiswa[$i][1] . "</td>";
                echo "<td>" . $dataSiswa[$i][2] . "</td>";
                echo "<td>" . $dataSiswa[$i][3] . "</td>";
                echo "</tr>";
             
                $totalUmur += $dataSiswa[$i][1];
            }
            echo "</tr>";
            $rataUmur = $totalUmur / count($dataSiswa) ;
            ?>
        </table>
        <h2>Rata-rata Umur Siswa: <?php echo $rataUmur;?> tahun</h2>
    </body>
</html>