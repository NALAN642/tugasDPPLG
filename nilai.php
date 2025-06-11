<?php
$nilai = 100;

if ($nilai >= 90 && $nilai <= 100) {
    $keterangan = "A";
} elseif ($nilai >= 80 && $nilai < 90) {
    $keterangan = "B";
} elseif ($nilai >= 70 && $nilai < 80) {
    $keterangan = "C";
} elseif ($nilai >= 0 && $nilai < 70) {
    $keterangan = "D";
} else {
    $keterangan = "Nilai wajib di antara 0 - 100";
}

echo "Nilai $nilai = $keterangan";
?>