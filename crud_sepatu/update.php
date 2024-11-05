<?php
include 'database.php';

if (isset($_GET['id_sepatu'])) {
    $id = htmlspecialchars($_GET['id_sepatu']);
    $query = "SELECT * FROM daftar_sepatu WHERE id_sepatu= ?";
    $params = [$id];
    $sql = sqlsrv_query($koneksi, $query, $params);

    if ($sql) {
        $barang = sqlsrv_fetch_array($sql, SQLSRV_FETCH_ASSOC);
    } else {
        header('Location:index.php');
    }
} else {
    header('Location:index.php');
}

if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['nama_sepatu']);   
    $deskripsi = htmlspecialchars($_POST['deskripsi_sepatu']);
    $stok = htmlspecialchars($_POST['stok_sepatu']);
    $harga = htmlspecialchars($_POST['harga_sepatu']);
    $id = htmlspecialchars($_POST['id_sepatu']);

    if (isset($nama) && isset($harga)) {
       
        $query = "UPDATE daftar_sepatu SET nama_sepatu = ?, deskripsi_sepatu = ?, stok_sepatu= ?,  harga_sepatu = ? WHERE id_sepatu = ?";
        $params = [
            $nama,
            $deskripsi,
            $stok,
            $harga,
            $id
        ];
        $sql = sqlsrv_query($koneksi, $query, $params);

        if ($sql) {
            header("Location:index.php?msg=update");
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
    <h3 class="text-center my-3" style="font-size:xx-large; font-weight:bolder">UPDATE DATA</h3>
    <div class="card mx-5 py-2 px-3">
        <form action="update.php" method="POST">
            <div class="mb-3">
                <label for="nama_sepatu" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_sepatu" name="nama_sepatu" value="<?= $barang['nama_sepatu'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_sepatu" class="form-label">Deskripsi Barang</label>
                <textarea class="form-control" id="deskripsi_sepatu" name="deskripsi_sepatu" rows="3"><?= $barang['deskripsi_sepatu'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="stok_sepatu" class="form-label">Stok Barang</label>
                <input type="number" class="form-control" id="stok_sepatu" name="stok_sepatu" min="0" value="<?= $barang['stok_sepatu'] ?>" min="0" required>
            </div>
            <div class="mb-3">
                <label for="harga_sepatu" class="form-label">Harga Barang</label>
                <input type="number" class="form-control" id="harga_sepatu" name="harga_sepatu" value="<?= $barang['harga_sepatu'] ?>" min="0"  required>
            </div>
            <input type="hidden" name="id_sepatu" value="<?= $barang['id_sepatu'] ?>">
            <button class="btn btn-primary" type="submit" name="submit">SIMPAN</button>
        </form>
    </div>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>