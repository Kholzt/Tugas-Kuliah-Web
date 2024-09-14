<?php
//melakukan import db.php
include "./db.php";

//query data
$query = "SELECT * FROM produk";
// melakukan persiapan pemanggilan data 
$stmt = $db->prepare($query);
// mengeksekusi data
$stmt->execute();

// melakukan format data pada data yg diambil
// perbedaan pemanggilan data berdasarkan fetchMode 
// PDO::FETCH_ASSOC -> $data['key']
// PDO::FETCH_OBJ -> $data->key
// PDO::FETCH_NUM  -> $data[0]
$stmt->setFetchMode(PDO::FETCH_OBJ);

// mengambil data
$results = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <div class="d-flex align-items-center">
            <h1>List Produk</h1>
            <a class="btn btn-primary ms-auto" href="add.php">Tambah Produk</a>
        </div>
        <table class="table  mt-3">
            <thead>
                <tr class="bg-secondary">
                    <th>Nama</th>
                    <th>Harga</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $result) : ?>
                    <tr>
                        <td><?= $result->nama ?></td>
                        <td><?= $result->harga ?></td>
                        <td>
                            <a class="btn btn-warning" href="edit.php?id=<?= $result->id ?>">Edit</a>
                            <a class="ms-2 btn btn-danger" href="delete.php?id=<?= $result->id ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>