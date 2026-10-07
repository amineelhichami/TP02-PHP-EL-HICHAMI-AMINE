<!DOCTYPE html>
<html lang=fr >
    <head>
        <title>Exercice 3 TP 2 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <?php
    define('TAUX_TVA' , 20 ) ;
    const DEVISE = "MAD" ;

    $prix_Unitaire_HT = 60 ;
    $quantite = 3 ;

    $total_HT = $prix_Unitaire_HT * $quantite ;
    $montant_TVA = $total_HT * ( TAUX_TVA / 100 ) ;
    $total_TTC = $total_HT + $montant_TVA ;

    //Affichage 
    echo "Prix unitaire HT : ".$prix_Unitaire_HT." ".DEVISE."<br>" ;
    echo "Quantite : ".$quantite."<br><br>" ;
    echo "Prix total HT : ".$total_HT." ".DEVISE."<br>" ;
    echo "Montant du TVA : ".$montant_TVA." ".DEVISE."<br>" ;
    echo "Total TTC : ".$total_TTC." ".DEVISE."<br>" ;

    //Ajout des frais de livraison
    $total_TTC += 15 ;
    
    //Affichage du montant final
    echo "Montant final : ".$total_TTC." ".DEVISE."<br>" ;
    ?>

    </body>
</html>