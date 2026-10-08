<?php
$numeroMois = (int) date("m") ;
switch ($numeroMois) {
    case 1:
        echo "C'est le Janvier";
        break;
    case 2:
        echo "C'est le Février";
        break;
    case 3:
        echo "C'est le Mars";
        break;
    case 4:
        echo "C'est le Avril";
        break;
    case 5:
        echo "C'est le Mai";
        break;
    case 6:
        echo "C'est le Juin";
        break;
    case 7:
        echo "C'est le Juillet";
        break;
    case 8:
        echo "C'est le Août";
        break;
    case 9:
        echo "C'est le Septembre";
        break;
    case 10:
        echo "C'est le Octobre";
        break;
    case 11:
        echo "C'est le Novembre";
        break;
    case 12:
        echo "C'est le Décembre";
        break;
    default:
        echo "Numéro de mois invalide";
        break;
        }
?>