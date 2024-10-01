<html>
    <head>
    <script src="../P5/praktik_jquery/jquery-3.7.1.js"></script>
    <script>
            $(document).ready(function(){
                $("#flip").click(function() {
                    $("#kotak2").slideToggle("slow");
                });
            });
        </script>
        <style>
           table {
                width: 100%;
                border-collapse: collapse;
                margin: 10px 0;
                font-size: 18px;
            }
            th{
                padding: 10px;
                border: 1px solid #000;
                text-align: left;
            }
            td, ul{
                padding: 10px;
                border: 1px solid #000;
            }
            #kotak2, #flip {
                padding: 10px;
                background-color: #FAFAD2 ;
                border: solid 2px #F5DEB3;
                border-radius: 5px;
            }   
            #kotak2 {
                text-align:left;
                display: none;
            }
            #flip{
                font-weight: bold;
                text-align: center;
            }

        </style>
    </head>
    <body>
    <div id="flip">Klik untuk Melihat Database</div>
    <div id="kotak2"> 
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
    </div>
    </body>
</html>