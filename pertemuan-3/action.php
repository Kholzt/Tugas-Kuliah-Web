<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Nama Lengkap: " . htmlspecialchars($_POST['nama']) . "<br>";
    echo "Email: " . htmlspecialchars($_POST['email']) . "<br>";
    echo "Kota: " . htmlspecialchars($_POST['kota']) . "<br>";
    echo "Gender: " . ($_POST['gender'] == '1' ? 'Laki-laki' : 'Perempuan') . "<br>";
    echo "Alamat: " . htmlspecialchars($_POST['alamat']) . "<br>";
    echo "Website: " . htmlspecialchars($_POST['website']) . "<br>";
    echo "Tanggal Lahir: " . htmlspecialchars($_POST['tgl_lahir']) . "<br>";
    echo "Jumlah Anak: " . htmlspecialchars($_POST['anak']) . "<br>";
    // etc.
}
?>
