<?php
include "./db.php"; // Menghubungkan ke file database

// Versi singkat dengan redirect
if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    $id = $_GET["id"];

    // Query DELETE langsung dengan prepared statement
    $query = "DELETE FROM produk WHERE id = :id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Eksekusi query DELETE
    if ($stmt->execute()) {
        // Redirect ke halaman produk.php setelah berhasil dihapus
        header("Location: produk.php");
        exit;
    } else {
        echo "Gagal menghapus produk.";
    }
} else {
    echo "ID tidak valid atau data tidak ditemukan.";
}
