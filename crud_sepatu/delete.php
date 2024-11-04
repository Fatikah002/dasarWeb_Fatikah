<?php
include 'database.php';

if (isset($_POST['submit'])) {
    $id = htmlspecialchars($_POST['id_sepatu']);

    $query = "DELETE FROM daftar_sepatu WHERE id_sepatu = ?";
    $params = [$id];
    $sql = sqlsrv_query($koneksi, $query, $params);

    if ($sql) {
        header("Location:index.php?msg=delete");
    } else {
        $errors = print_r(sqlsrv_errors(), true);
        echo "<script>alert('$errors');</script>";
    }
} 
?>