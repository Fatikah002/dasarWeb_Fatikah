<!DOCTYPE html>
<html>

<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="POST" action="proses_validasi.php">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email: </label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br><br>

        <input type="submit" value="Submit">
    </form>
    <div id="hasil">
        <!-- Hasil akan ditampilkan di sini -->
    </div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(e) {
                e.preventDefault(); // Mencegah pengiriman form secara default
                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                // Mengumpulkan data form
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (valid) {
                    var formData = $(this).serialize();

                    $.ajax({
<<<<<<< HEAD
                        url: "proses_validasi.php",
=======
                        url: "proses_validasi.php", // Ganti dengan nama file PHP yang sesuai
>>>>>>> e97f3374263c9c4a6dfe7734c36c8815fae90c6f
                        type: "POST",
                        data: formData,
                        success: function(response) {
                            // Tampilkan hasil dari server di div "hasil"
                            $("#hasil").html(response);
                        },
                        error: function(response) {
                            $("#hasil").html("Terjadi kesalahan saat mengirim data");
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>