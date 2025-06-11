<?php
echo "Widakdo Adi Prasetyo/32.<br>";
echo "Muhammad Haidar Ardiansyah/22.<br>";

$jam = "19:50";
$tugas = "Ada";
$aktivitas = "";

if ($jam == "15:30") {
    $aktivitas = "Andi Pulang Sekolah.";
} elseif ($jam > "15:30" && $jam < "16:00") {
    $aktivitas = "Andi Sampai Dirumah.";
} elseif ($jam >= "16:00" && $jam < "16:30") {
    $aktivitas = "Andi Mandi.";
} elseif ($jam >= "16:30" && $jam < "17:00") {
    $aktivitas = "Andi Mengaji.";
} elseif ($jam >= "17:00" && $jam < "17:30") {
    $aktivitas = "Andi Chatting dengan Raya.";
} elseif ($jam >= "17:30" && $jam < "18:00") {
    $aktivitas = "Andi Membeli Bumbu.";
} elseif ($jam >= "18:00" && $jam < "18:05") {
    $aktivitas = "Andi Sholat Maghrib.";
} elseif ($jam >= "18:05" && $jam < "18:55") {
    $aktivitas = "Andi Makan Malam.";
} elseif ($jam >= "18:55" && $jam < "19:00") {
    $aktivitas = "Andi Sholat Isya.";
} elseif ($jam >= "19:00" && $jam < "19:30") {
    $aktivitas = "Andi Menghafalkan Naskah.";
} elseif ($jam >= "19:30" && $jam < "21:30") {
    if ($tugas == "Ada") {
        $aktivitas = "Andi Nugas.";
    } else {
        $aktivitas = "Andi Free.";
    }
} elseif ($jam >= "21:30" && $jam < "22:00") {
    $aktivitas = "Family Time.";
} elseif ($jam == "22:00") {
    $aktivitas = "Andi Tidur.";
} elseif ($jam == "04:00") {
    $aktivitas = "Andi Bangun";
} else {
    $aktivitas = "Tidak Ada Kegiatan.";
}
echo $aktivitas;
?>