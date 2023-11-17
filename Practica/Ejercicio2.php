<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    echo "<h1>Jugador 1</h1>";
    $tot1=0;
    $tot2=0;
    for ($i=0; $i < 5; $i++) {
        $dado1=rand(1,6);
        print "<img src='./img/$dado1.jpg' width=100 height=100>\n";
        $tot1=$dado1+$tot1;
        
    }
    echo "<h1>Jugador 2</h1>";

    for ($i=0; $i < 5; $i++) {
        $dado2=rand(1,6);
        print "<img src='./img/$dado2.jpg' width=100 height=100>\n";
        $tot2=$dado2+$tot2;
        
    }
   
    if ($tot1>$tot2) {
        print "<p>En conjunto, ha ganado el Jugador 1</p>\n";
    } 
    elseif($tot1==$tot2){
        print "<p>Ha sido empate</p>\n";
    }else {
        print "<p>En conjunto, ha ganado el Jugador 2</p>\n";
    }
    ?>
</body>
</html>