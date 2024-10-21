<!DOCTYPE html>
<html>

<head>
    <title>SkinRate</title>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f8f7f3;
        }
    </style>
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #d03d74; ">
        <div class="container" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
            <a class="navbar-brand text-white" style="font-size:x-large;">SkinRate</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#penilaian">Penilaian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#tentangKami">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

<section class="hero-section text-center" style="padding: 60px; background-color: #FFF0F5;;">
    <div class="container ">
        <h1>Temukan Produk Skincare Terbaik</h1>
        <p>Lihat Ulasan Pengguna untuk Membeli Skincare.</p>
    </div>
</section>

<!-- array produk -->
<?php
$produk = [
    [
        "nama" => "Y.O.U Glow Serum",
        "deskripsi" => "Serum yang membuat kulit menjadi lebih cerah dan menenangkan kulit sehingga kulit terlihat lebih segar dan berseri.",
        "gambar" => "../UTS/gambar/serum.png",
        "penilaian" => 4.8
    ],
    [
        "nama" => "Azarine Hydrating Toner",
        "deskripsi" => "Toner untuk menjaga kelembapan kulit dalam jangka panjang dan menyegarkan kulit.",
        "gambar" => "../UTS/gambar/toner.png",
        "penilaian" => 4.8
    ],
    [
        "nama" => "Glad2Glow Brightening Moisturizer",
        "deskripsi" => "Krim pelembab untuk melembapkan kulit, tampak lebih cerah, menyamarkan noda hitam.",
        "gambar" => "../UTS/gambar/moist.png",
        "penilaian" => 4.7
    ],
    [
        "nama" => " Brightly Exfoliating Toner",
        "deskripsi" => "Pembersih wajah dengan efek eksfoliasi untuk mengangkat sel kulit mati.",
        "gambar" => "../UTS/gambar/exfoliatingtoner.png",
        "penilaian" => 4.6
    ],
    [
        "nama" => "Wardah Sunscreen ",
        "deskripsi" => "Tabir surya dengan SPF 50 untuk melindungi kulit dari sinar UV.",
        "gambar" => "../UTS/gambar/sunscreen.png",
        "penilaian" => 4.9
    ]
];

// pengambilan data dari form
$penilaian = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nama"])) {
        $nama = htmlspecialchars($_POST["nama"]);
    } else {
        $nama = '';
    }

    if (isset($_POST["namaProduk"])) {
        $namaProduk = htmlspecialchars($_POST["namaProduk"]);
    } else {
        $namaProduk = '';
    }

    if (isset($_POST["penilaian"])) {
        $rating = htmlspecialchars($_POST["penilaian"]);
    } else {
        $rating = '';
    }

    if (isset($_POST["komentar"])) {
        $komentar = htmlspecialchars($_POST["komentar"]);
    } else {
        $komentar = '';
    }

    // Penyimpanan dari formulir
    $penilaian[] = [
        "nama" => $nama,
        "namaProduk" => $namaProduk,
        "penilaian" => $rating,
        "komentar" => $komentar
    ];
}
?>

<!--produk skincare  -->
<section id="produk" class="text-center py-3 border-top" style="background-color: #f8f7f3;">
    <div class="container">
        <h2>Produk Skincare Terbaik</h2>
        <div class="row justify-content-center">
            <?php foreach ($produk as $item): ?>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card" style="width: 100%; height: 100%;">
                        <img src="<?= $item['gambar']; ?>" class="d-flex card-img-top  align-items-center" alt="<?= $item['nama']; ?>"
                            style="height: 200px; width:200px; margin: auto;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item['nama']; ?></h5>
                            <p class="card-text"><?= $item['deskripsi']; ?></p>
                            <p>Rating: <span class="badge bg-danger"><?= $item['penilaian']; ?></span> / 5</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- penilaian dan komentar -->
<section id="penilaian" class="text-center py-5  border-top" style="background-color:#FFF0F5;">
    <div class="container">
        <h2>Penilaian & Komentar Pengguna</h2>
        <div class="row border border-grey shadow-sm rounded p-3 mb-5 justify-content-center" style="background-color:#f8f7f3;">
            <?php
            if (count($penilaian) > 0) {
                foreach ($penilaian as $nilai) {
                    echo '<div class="col-md-4">';
                    echo '<h5>' . htmlspecialchars($nilai["nama"]) . '</h5>';
                    echo '<h6>' . htmlspecialchars($nilai["namaProduk"]) . '</h6>';
                    echo '<p>"' . htmlspecialchars($nilai["komentar"]) . '"</p>';
                    echo '<p>Penilaian: <span class="badge bg-danger">' . htmlspecialchars($nilai["penilaian"]) . '</span> / 5</p>';
                    echo '</div>';
                }
            } else {
                echo '<p>Belum ada penilaian. Berikan Komentarmu!</p>';
            }
            ?>
        </div>
    </div>
</section>

<!-- form penilaian -->
<section id="formPenilaian" class="text-center text-dark py-5 border-top" style="background-color:#f8f7f3;">
    <div class="container">
        <h2>Beri Penilaian Produk Terbaikmu</h2>
        <div class="row justify-content-center fw-semibold">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 col-md-4">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Anda</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <div class="mb-3">
                    <label for="namaProduk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="namaProduk" name="namaProduk" required>
                </div>

                <div class="mb-3">
                    <label for="penilaian" class="form-label">Rating (1-5)</label>
                    <input type="text" class="form-control" id="penilaian" name="penilaian" required>
                </div>

                <div class="mb-3">
                    <label for="komentar" class="form-label">Komentar</label>
                    <textarea class="form-control" id="komentar" name="komentar" rows="3" required></textarea>
                </div>

                <button type="submit" class="btn btn-dark fw-semibold ">Kirim Penilaian</button>
            </form>
        </div>
    </div>
</section>

<!-- tentang kami -->
<section id="tentangKami" class="text-center py-5 border-top text-white" style="background-color: #d03d74;">
    <div class="container">
        <h2 style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">SkinRate</h2>
        <p>SkinRate adalah platform online yang membantu pengguna menemukan produk skincare terbaik melalui
            sistem rating dan ulasan yang terpercaya. Anda dapat menjelajahi berbagai produk, membaca
            pengalaman pengguna lain, dan memberikan penilaian berdasarkan pengalaman Anda sendiri.
            Dengan informasi lengkap tentang setiap produk, SkinRate memudahkan Anda membuat keputusan perawatan kulit yang tepat.
            Bergabunglah dengan kami dan temukan produk skincare yang cocok untuk kulit sehat dan bercahaya!</p>
    </div>
</section>

<footer class="text-center text-white footer" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; background-color: #d03d74;">
    <div class="container">
        <p>&copy; 2024 SkinRate.</p>
    </div>
</footer>

</body>
</html>