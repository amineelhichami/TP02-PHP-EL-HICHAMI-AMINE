<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];
$somme = 0;
$nbValides = 0;
$meilleureNote = 0;
$meilleurEtudiant = "";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9 - TP 2</title>
</head>
<body>
    <table border="1" >
        <tr>
            <th>Étudiant</th>
            <th>Note</th>
            <th>Résultat</th>
        </tr>
        <?php foreach ($notes as $etudiant => $note): ?>
            <tr>
                <td><?php echo $etudiant; ?></td>
                <td><?php echo $note; ?></td>
                <td>
                    <?php
                    if ($note >= 10) {
                        echo "Validé";
                        $nbValides++;
                    } else {
                        echo "Non validé";
                    }
                    ?>
                </td>
            </tr>
            <?php
            // Calcul de la somme
            $somme += $note;
            // Recherche de la meilleure note
            if ($note > $meilleureNote) {
                $meilleureNote = $note;
                $meilleurEtudiant = $etudiant;
            }
            ?>
        <?php endforeach; ?>
    </table>
    <?php
    // Calcul de la moyenne
    $moyenne = $somme / count($notes);
    echo "<br>Somme des notes : ".$somme."<br>";
    echo "Moyenne de la classe : ".$moyenne."<br>";
    echo "Nombre d'étudiants validés : ".$nbValides."<br>";        
    echo "Meilleure note :".$meilleureNote."<br>";
    echo "Meilleur etudiant :".$meilleurEtudiant; 
    ?>
</body>
</html>