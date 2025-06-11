<?php

$jam = "15:00";

if ($jam >= "00:00" && $jam < "04:00") {
    $keterangan = "Dini Hari";
} elseif ($jam >= "04:00" && $jam <= "10:00") {
    $keterangan = "Pagi";
} elseif ($jam >= "10:00" && $jam <= "15:00") {
    $keterangan = "Siang";
} elseif ($jam >= "15:00" && $jam <= "17:30") {
    $keterangan = "Sore";
} elseif ($jam >= "17:30" && $jam <= "18:30") {
    $keterangan = "Petang";
} elseif ($jam >= "18:30" && $jam <= "24:00") {
    $keterangan = "Malam";
} else {
    $keterangan = "Dunia Lain";
}

echo "$jam = $keterangan";
?>