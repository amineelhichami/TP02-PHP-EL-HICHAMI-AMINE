<?php
$moyenne = 0 ;

if ($moyenne < 0 || $moyenne > 20){
    echo "Note invalide";
}else if ($moyenne < 10 ) {
    echo "Non validé";
} else if ($moyenne < 12){
    echo "Passable";
} else if ($moyenne < 14 ){
    echo "Assez bien";
} else if ($moyenne < 16 ){
    echo "Bien";
} else {
    echo "Très bien";
}

?>