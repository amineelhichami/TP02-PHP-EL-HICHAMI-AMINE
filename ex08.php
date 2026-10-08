<?php
$i = 0;
while ($i <= 20) {
    if ($i == 10) {
        echo "<b>$i</b><br>";
    } else {
        echo $i."<br>";
    }
    $i += 2;
}

echo "<br><br>";

$c = 5;
$wl = 0;
$do_wl = 0;
while ($c < 5) {
    $wl++;
    $c++;
}
do {
    $do_wl++;
    $c++;
    } while ($c < 5);

echo "Nombre d'exécutions de while : $wl <br>";
echo "Nombre d'exécutions de do-while : $do_wl<br><br>";

for ($i = 1; $i <= 20; $i++) {
    if ($i >= 16) {
        break;
    }
    if ($i % 3 == 0) {
        continue;
    }

    echo $i."<br>";
}
?>