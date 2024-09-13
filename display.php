    <?php
    $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $umur = isset($_POST["umur"]) ? $_POST["umur"] : "";
    echo "Nama : $nama <br>";
    echo "Umur : $umur";
