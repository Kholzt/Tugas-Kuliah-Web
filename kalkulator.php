<!DOCTYPE html>
<html>

<head>
    <title>Kalbulator</title>
</head>

<body>

    <div class="container" style="margin-top: 50px">

        <?php

        // Jika tombol submit ditekan
        if (isset($_POST['submit'])) {
            // Cek apakah input berupa angka
            if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
                // Hitung total
                if ($_POST['operation'] == 'tamba') {
                    $total = $_POST['number1'] + $_POST['number2'];
                }
                if ($_POST['operation'] == 'kurang') {
                    $total = $_POST['number1'] - $_POST['number2'];
                }
                if ($_POST['operation'] == 'kali') {
                    $total = $_POST['number1'] * $_POST['number2'];
                }
                if ($_POST['operation'] == 'bahagi') {
                    $total = $_POST['number1'] / $_POST['number2'];
                }

                // Tampilkan hasil perhitungan
                echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} jadi {$total}</h1>";
            } else {
                // Pesan error jika input bukan angka
                echo 'Minta Ngen Anta Dahak Nya!';
            }
        }

        ?>
        <!-- bahasa dayak -->
        <!-- Form Kalkulator -->
        <form method="post" action="kalkulator.php">
            <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
            <select name="operation">
                <option value="tamba">tamba</option>
                <option value="kurang">kurang</option>
                <option value="kali">kali</option>
                <option value="bahagi">bahagi</option>
            </select>
            <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
            <input name="submit" type="submit" value="Hitung" class="btn btn-primary" />
        </form>

    </div>

</body>

</html>