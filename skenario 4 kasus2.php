<?php
$jumlah = 30;

for ($i = $jumlah; $i >= 1; $i--) {
    if ($i == 1) {
        echo "Anak ayam turun $i, mati satu tinggal induknya<br>";
    } else {
        $sisa = $i - 1;
        echo "Anak ayam turun $i, mati satu tinggal $sisa<br>";
    }
}
?>
