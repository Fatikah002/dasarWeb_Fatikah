<?php
if (isset($_POST["submit"])) {
    // Lokasi penyimpanan file yang diunggah
    $targetDirectory = "documents/";

    //Periksa apkah direktori penyimpanan ada, jika tidak maka buat
    if (!file_exists(($targetDirectory))) {
        mkdir($targetDirectory, 0777, true);
    }

    if ($_FILES['files']['name'][0]) {
        $totalFiles = count($_FILES['files']['name']);

        // Loop melalui semua file yang diunggah

        for ($i = 0; $i < $totalFiles; $i++) {
            $fileName = $_FILES['files']['name'][$i];
            $targetFile = $targetDirectory . basename($fileName);
            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));



            $allowedExtensions = array("jpg", "jpeg", "png", "gif");

            if (in_array($fileType, $allowedExtensions)) {
                //Pindahkan file yang diunggah kedirektori penyimpanan
                if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                    echo "File $fileName berhasil diunggah<br>";
                } else {
                    echo "Gagal mengunggah file $fileName.<br>";
                }
            } else {
                echo "File tidak valid ";
            }
        }
    }
}
?>
