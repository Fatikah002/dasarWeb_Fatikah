<?php
// mengimport kode program yang ada didalam database.php
include 'database.php';

// mengecek apakah ada data bernama 'submit'
if (isset($_POST['submit'])) {
    // memasukkan value bersih dari $_POST ke dalam variabel-variabel
    $nama = htmlspecialchars($_POST['nama_sepatu']);
    $deskripsi = htmlspecialchars($_POST['deskripsi_sepatu']);
    $stok = htmlspecialchars($_POST['stok_sepatu']);
    $harga = htmlspecialchars($_POST['harga_sepatu']);
    

    // mengecek apakah $nama dan $harga sudah terisi
    if (isset($nama) && isset($harga)) {
        // query sql
        $query = "INSERT INTO daftar_sepatu (nama_sepatu, deskripsi_sepatu, stok_sepatu , harga_sepatu) VALUES (?, ?, ?, ?)";
        // parameter atau data yang akan dimasukkan ke dalam tanda tanya (?) di query
        $params = [
            $nama,
            $deskripsi,
            $stok,
            $harga
        ];
        // eksekusi query
        $sql = sqlsrv_query($koneksi, $query, $params);

        // jika query berhasil maka akan dikembalikan ke halaman index
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>DAFTAR SEPATU</title>
</head>

<body>
    <h3 class="text-center my-3">CREATE</h3>
    <div class="card mx-5 py-2 px-3">
        <!-- form yang akan menjalankan ulang file create.php dengan method post -->
        <form action="create.php" method="POST">
            <div class="mb-3">
                <label for="nama_sepatu" class="form-label">Nama Barang</label>
                <!-- input nama -->
                <input type="text" class="form-control" id="nama_sepatu" name="nama_sepatu" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_sepatu" class="form-label">Deskripsi Barang</label>
                <!-- input deskripsi -->
                <textarea class="form-control" id="deskripsi_sepatu" name="deskripsi_sepatu" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="stok_sepatu" class="form-label">Stok</label>
                <!-- input stok -->
                <input type="number" class="form-control" id="stok_sepatu" name="stok_sepatu" min="0" required>
            </div>
            <div class="mb-3">
                <label for="harga_sepatu" class="form-label">Harga Barang</label>
                <!-- input harga -->
                <input type="number" class="form-control" id="harga_sepatu" name="harga_sepatu" required>
            </div>
            <!-- tombol kirim yang memiliki nama 'submit' -->
            <button class="btn btn-primary" type="submit" name="submit">TAMBAH</button>
            <!-- tombol reset jika ingin menghapus data yang diinputkan ke form -->
            <button class="btn btn-danger" type="reset">RESET</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>