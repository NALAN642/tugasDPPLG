<?php
$hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

$tanggal = [];
for ($i = 1; $i <= 31; $i++) {
    $tanggal[] = $i;
}

$bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];

$tahun = [2024, 2025, 2026];

$targetHari    = "Senin";
$targetTanggal = 10;
$targetBulan   = "Mar";
$targetTahun   = 2025;

// Perulangan
foreach ($hari as $h) {    
if ($h === $targetHari) {
    foreach ($tanggal as $t) {
        if ($t === $targetTanggal) {
            foreach ($bulan as $b) {
                if ($b === $targetBulan) {
                    foreach ($tahun as $th) {
                        if ($th === $targetTahun) {
                            echo "$h, $t - $b - $th";
                        }
                    }
                }
            }
        }
    }
}
}
?>
