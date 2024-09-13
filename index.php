<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Kuliah Web</title>
    <link rel="stylesheet" href="style.css">
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
        }
        h1 {
            font-size: 5rem;
        }
        p {
            font-size: 1.3rem;
        }
    </style>
</head>

<body>
    <h1><?= "Selamat datang disitus kami"; ?></h1>
    <p><?= "Ini adalah paragraf yg dibuat dengan php dan di style dengan css"; ?></p>
</body>

</html>