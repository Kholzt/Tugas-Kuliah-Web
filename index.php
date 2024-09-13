<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar File</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: black;
            color: white;
            min-height: 100vh;
            font-family: "Inter", system-ui;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .container {
            font-size: 1.3rem;
        }

        ul {
            list-style: none;
            margin: 20px 0;
            padding: 0;
        }

        li {
            padding: 5px 0;
        }

        a {
            color: #00d1ff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .folder {
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>Daftar File</h1>
    <div class="container">
        <h2>Files in Directory:</h2>
        <ul class="parent-list">
            <?php
            // Fungsi untuk menampilkan daftar file rekursif dari direktori
            function listFiles($dir)
            {
                // Mengambil daftar file dan folder dari direktori
                $files = scandir($dir);

                // Menampilkan file saja, kecuali "." dan ".." serta file tersembunyi (yang diawali dengan .)
                foreach ($files as $file) {
                    if ($file !== '.' && $file !== '..' && $file[0] !== '.') {
                        $fullPath = $dir . '/' . $file;

                        // Mengecek apakah elemen adalah file
                        if (is_file($fullPath)) {
                            echo "<li><a href='" . $fullPath . "' >" . $file . "</a></li>";
                        }
                        // Mengecek apakah elemen adalah folder, lalu memanggil fungsi secara rekursif
                        elseif (is_dir($fullPath)) {
                            echo "<li class='folder'>Folder: " . $file . "</li>";
                            echo "<ul>";
                            listFiles($fullPath); // Panggil fungsi lagi untuk folder
                            echo "</ul>";
                        }
                    }
                }
            }

            // Menampilkan daftar file di root directory
            listFiles('.');
            ?>
        </ul>
    </div>
</body>

</html>