<?php
include "./db.php"; // Menghubungkan ke file database

if (isset($_POST["submit"])) {
    // Mendapatkan data dari form
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];

    // Validasi sederhana: Pastikan data tidak kosong
    if (!empty($nama) && !empty($harga)) {
        // Query untuk menambahkan data ke database
        $query = "UPDATE produk SET nama = :nama, harga = :harga WHERE id = :id";
        $stmt = $db->prepare($query);

        // Bind parameter untuk menghindari SQL injection
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':harga', $harga);
        $stmt->bindParam(':id', $id);

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

$nama = "";
$harga = "";
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Query untuk mengambil data produk
    $query = "SELECT * FROM produk WHERE id = :id LIMIT 1";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    //hanya mengambil 1 record
    $produk = $stmt->fetch(PDO::FETCH_ASSOC);

    // Jika produk ditemukan, isi form dengan data produk
    if ($produk) {
        $nama = $produk["nama"];
        $harga = $produk["harga"];
    } else {
        echo "Produk tidak ditemukan.";
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
        <h1>Ubah Produk</h1>

        <!-- action kosong berarti form akan mengirim data ke file ini -->
        <form action="" method="post">
            <!-- Menyimpan ID produk untuk edit, hidden saat menambah -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label for="nama">Nama Produk:</label>
            <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $nama; ?>" required>
            <br>

            <label for="harga">Harga Produk:</label>
            <input class="form-control" type="number" name="harga" id="harga" value="<?php echo $harga; ?>" required>
            <br>
            <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>