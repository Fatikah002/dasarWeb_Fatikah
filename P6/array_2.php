<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
             body {
                font-family: Arial, sans-serif;
                margin: 10px;
            }
            table {
                width: 50%;
                border-collapse: collapse;
                margin: 20px 0;
                font-size: 18px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }
            th{
                padding: 10px;
                border: 1px solid #000;
                text-align: center;
            }
            td{
                padding: 5px;
                border: 1px solid #000;
            }
            
        </style>
    </head>
    <body>
        <?php 
        $Dosen = [
            'nama' => 'Fatikah Salsabilla',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
        echo "Nama: {$Dosen['nama']} <br>";
        echo "Domisili: {$Dosen['domisili']} <br>";
        echo "Jenis Kelamin: {$Dosen['jenis_kelamin']}<br>";
        ?>
                
        <table>
            <tr>
                <th>Nama</th>
                <th>Domisili</th>
                <th>Jenis Kelamin</th>
            </tr>
            <tr>
                <td><?php echo $Dosen['nama']; ?></td>
                <td><?php echo $Dosen['domisili']; ?></td>
                <td><?php echo $Dosen['jenis_kelamin']; ?></td>
            </tr>
        </table>
        
    </body>
</html>