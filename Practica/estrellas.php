<?php
//que de error si no es numero
    $alto = $_REQUEST["alto"];
    $ancho = $_REQUEST["ancho"]; 
    if (is_numeric($ancho) && is_numeric($alto)){
        if ($alto <= 0 || $alto > 100 || $ancho <= 0 || $ancho > 100) {
            echo "Error";
        } else {
            for ($i = 0; $i < $alto; $i++) {
                for ($j = 0; $j < $ancho; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        }}
        else{
            echo "Tienen que ser números";
        }
?>