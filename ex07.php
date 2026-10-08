<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7 - TP 2</title>
</head>
<body>
    <section>
        <?php
        $nombre = 7;
        for ($i = 1; $i <= 10; $i++) {
            echo "$nombre x $i = " . ($nombre * $i) . "<br>";
        }
        ?>
    </section>
    <section>
        <pre>
<?php
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>
        </pre>
    </section>
</body>
</html>