<!DOCTYPE html>
<html lang=fr >
    <head>
        <title>Exercice 4 TP 2 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <?php 
    $v1 = 42 ;
    $v2 = "42" ; 
    $v3 = 15.8 ;
    $v4 = true ;
    $v5 = false ;
    $v6 = null ;
    ?>

    <pre>
    <?php
    var_dump( $v1 , $v2 , $v3 , $v4 , $v5 , $v6 );
    ?>
    </pre>
    <?php
    $v2 = (int) $v2 ;
    $v3 = (int) $v3 ;
    $v1 = (string) $v1 ;
    ?>
    
    <pre>
    <?php
    var_dump( $v1 , $v2 , $v3 );
    echo $v4."<br>" ;
    echo $v5."<br>";
    var_dump($v4 , $v5);
    echo "<br>Question 5 : <br><br>";
    var_dump((bool)0);
    var_dump((bool)"0");
    var_dump((bool)"PHP");
    var_dump((bool)[]);
    ?>
    </pre>
    
    </body>
</html>