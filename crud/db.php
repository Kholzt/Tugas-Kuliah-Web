<?php
class DB
{
    // Parameter koneksi database
    private $servername = "localhost"; // Nama server database
    private $username = "admin";        // Nama pengguna database
    private $password = "101010";       // Kata sandi pengguna database
    private $dbName = "php_crud";       // Nama database
    private $conn;                     // Variabel untuk menyimpan koneksi PDO

    // Konstruktor kelas, akan dijalankan saat objek dibuat
    public function __construct()
    {
        try {
            // Mencoba membuat koneksi ke database menggunakan PDO
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbName", $this->username, $this->password);

            // Set atribut error mode menjadi Exception untuk menangani kesalahan
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Menangani error jika koneksi gagal
            echo "Connection failed: " . $e->getMessage();
        }
    }

    // Metode untuk mendapatkan koneksi database
    public function getConnection()
    {
        return $this->conn;
    }
}

// Membuat objek DB dan mendapatkan koneksi
$db = (new DB())->getConnection();
