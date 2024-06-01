<?php
// Membuat array dengan indeks nama dan umur
$people = array(
    array("nama" => "Alya", "umur" => 19),
    array("nama" => "Selena", "umur" => 19),
    array("nama" => "Rigel", "umur" => 18),
    array("nama" => "Kaisel", "umur" => 20),
    array("nama" => "Olivia", "umur" => 17),
    array("nama" => "Zean", "umur" => 17),
    array("nama" => "Diablo", "umur" => "Unknown"),
    array("nama" => "Tryna", "umur" => "Unknown"),
    array("nama" => "Rose", "umur" => 30),
    array("nama" => "Kay", "umur" => 22),
    array("nama" => "Jake", "umur" => 35),
    array("nama" => "Riki", "umur" => 37),
    array("nama" => "Lia", "umur" => 22),
    array("nama" => "Raka", "umur" => 18),
    array("nama" => "Rayyan", "umur" => 20)
);

// Mengonversi array ke format JSON
$json_data = json_encode($people, JSON_PRETTY_PRINT);

// Menampilkan JSON
header('Content-Type: application/json');
echo $json_data;
?>
