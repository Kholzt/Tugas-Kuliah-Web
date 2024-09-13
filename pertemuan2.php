<?php


// pertemuan 2 slide 5
$nama = "salnan";
$$nama = "ratih";

echo "$nama $($nama) <br/>";
echo "$nama $salnan <br/>";



// pertemuan 2 slide 7
define("PI", 3.14);
define("PROSES", "Perhitungan Luas Lingkaran");
$radius = 10;
$luas = PI * $radius * $radius;
echo PROSES;
echo "<br/>Luas lingkarang $luas";


// pertemuan 2 slide 23 nomer 1
$x = 12;
$y = "12";
if ($x == $y) {
    echo "<br>Sama <br>";
} else {
    echo "<br>Tidak Sama <br>";
}

//* pertemuan 2 slide 23 nomer 2
$x = 12;
$y = "12";
if ($x === $y) {
    echo "Sama <br>";
} else {
    echo "Tidak Sama <br>";
}
