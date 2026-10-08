<?php
if (
    !isset($_GET["nom"]) ||
    !isset($_GET["prenom"]) ||
    !isset($_GET["groupe"])
) {
    echo "<h2>Aucune donnée reçue</h2>";
    echo "<p>Veuillez remplir et envoyer le formulaire GET.</p>";
    exit;
}
$nom = trim($_GET["nom"]);
$prenom = trim($_GET["prenom"]);
$groupe = trim($_GET["groupe"]);
if ($nom === "" || $prenom === "" || $groupe === "") {
    echo "<h2>Erreur</h2>";
    echo "<p>Veuillez remplir tous les champs.</p>";
    exit;
}
$nom = htmlspecialchars($nom, ENT_QUOTES, "UTF-8");
$prenom = htmlspecialchars($prenom, ENT_QUOTES, "UTF-8");
$groupe = htmlspecialchars($groupe, ENT_QUOTES, "UTF-8");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat GET</title>
</head>
<body>
    <h1>Bienvenue</h1>
        <?php echo "Bienvenue ".$prenom . " " . $nom; ?> !
        <?php echo "Vous êtes dans le groupe ".$groupe; ?>.
</body>
</html>