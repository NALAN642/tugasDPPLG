<?php
echo "<strong>Mawar yang dimiliki Sholeh:</strong><br>";
for ($mawar = 21; $mawar >= 10; $mawar--) {
    echo "$mawar, ";
}

echo "<br>";

echo "<strong>Mawar yang akan diberikan ke ibunya:</strong><br>";
for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
    echo "$mawar, ";
}
?>
