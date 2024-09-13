<?php
$data =  [
    (object)["name" => "Muhammad Nor Kholit", "kelas" => "X11"],
    (object)["name" => "Ahmad Yasin", "kelas" => "X11"],
    (object)["name" => "Mustova", "kelas" => "X11"],
];



header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

echo json_encode($data);
