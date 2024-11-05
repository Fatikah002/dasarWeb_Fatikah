<?php
include 'database.php';

if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['nama_sepatu']);
    $deskripsi = htmlspecialchars($_POST['deskripsi_sepatu']);
    $stok = htmlspecialchars($_POST['stok_sepatu']);
    $harga = htmlspecialchars($_POST['harga_sepatu']);
    

    if (isset($nama) && isset($harga)) {
        $query = "INSERT INTO daftar_sepatu (nama_sepatu, deskripsi_sepatu, stok_sepatu , harga_sepatu) VALUES (?, ?, ?, ?)";
        $params = [
            $nama,
            $deskripsi,
            $stok,
            $harga
        ];
        $sql = sqlsrv_query($koneksi, $query, $params);

        if ($sql) {
            header("Location:index.php?msg=create");
        } else {
            $errors = print_r(sqlsrv_errors(), true);
            echo "<script>alert('$errors');</script>";
        }
    } else {
        echo "<script>alert('Nama dan Harga Barang harus diisi!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>DAFTAR SEPATU</title>
</head>

<body style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', 'Arial', 'sans-serif'; background-color: #DFEBF6;">
    <h3 class="text-center my-3" style="font-size:xx-large; font-weight:bolder">TAMBAH DATA</h3>
    <div class="card mx-5 py-2 px-3" >
        <form action="create.php" method="POST">
            <div class="mb-3">
                <label for="nama_sepatu" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_sepatu" name="nama_sepatu" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_sepatu" class="form-label">Deskripsi Barang</label>
                <textarea class="form-control" id="deskripsi_sepatu" name="deskripsi_sepatu" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="stok_sepatu" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok_sepatu" name="stok_sepatu" min="0" required>
            </div>
            <div class="mb-3">
                <label for="harga_sepatu" class="form-label">Harga Barang</label>
                <input type="number" class="form-control" id="harga_sepatu" name="harga_sepatu" min="0" required>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">TAMBAH</button>
            <button class="btn btn-danger" type="reset">RESET</button>
        </form>
    </div>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>