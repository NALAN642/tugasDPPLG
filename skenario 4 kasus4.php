<?php
$musik = [
    "galau" => "Mesin Waktu - Budi Doremi",
    "bersemangat" => "Selamat Pagi - Ran",
    "marah" => "Yang Patah Tumbuh, yang Hilang Berganti - Banda Neira"
];

$suasana = "marah";

if (array_key_exists($suasana, $musik)) {
    echo "Ambyar sedang $suasana, Ambyar mendengarkan lagu " . $musik[$suasana] . ".";
} else {
    echo "Suasana hati tidak dikenali. Tidak ada lagu yang diputar.";
}
?>
