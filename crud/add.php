<?php
include "./db.php"; // Menghubungkan ke file database

if (isset($_POST["submit"])) {
    // Mendapatkan data dari form
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];

    // Validasi sederhana: Pastikan data tidak kosong
    if (!empty($nama) && !empty($harga)) {
        // Query untuk menambahkan data ke database
        $query = "INSERT INTO produk (nama, harga) VALUES (:nama, :harga)";
        $stmt = $db->prepare($query);

        // Bind parameter untuk menghindari SQL injection
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':harga', $harga);

        // Eksekusi query
        if ($stmt->execute()) {
            // Jika berhasil, arahkan ke halaman produk.php
            header("Location: produk.php");
            exit;
        } else {
            echo "Gagal menyimpan produk.";
        }
    } else {
        echo "Harap isi semua data.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <h1>Tambah Produk</h1>
        <!-- action kosong berarti form akan mengirim data ke file ini -->
        <form action="" method="post">
            <label for="nama">Nama Produk:</label>
            <input class="form-control" type="text" name="nama" id="nama" required>
            <br>
            <label for="harga">Harga Produk:</label>
            <input class="form-control" type="number" name="harga" id="harga" required>
            <br>
            <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>