<?php
$nombre=trim(strip_tags($_REQUEST['nombre']));
$trabajo=trim(strip_tags($_REQUEST['trabajo']));
$telefono=trim(strip_tags($_REQUEST['numero']));
$direccion=trim(strip_tags($_REQUEST['direccion']));
$otras=trim(strip_tags($_REQUEST['otras']));

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["guardar"])) {
    if($nombre =="" || $trabajo =="" || $telefono =="" || $direccion =="" || $otras ==""){
        echo "Tiene que llenar todos los campos";
    }
        elseif(is_numeric($telefono)){
        
            $archivo= "agenda.txt";
            if (!file_exists($archivo)) {
                fopen($archivo, 'w');
            }
            $file = fopen ($archivo, "a");
            fwrite($file,"Contacto: $nombre $trabajo $telefono $direccion $otras" . PHP_EOL);
            fclose($file);
            $fd= fopen ($archivo, "r");
                echo "<h1>Agenda:</h1> <br>";
            //Leer el contenido del archivo y mostrarlo
                $archivo = 'agenda.txt';
                $contenido = file_get_contents($archivo);
                echo "<pre>". $contenido. "</pre>";
            }else{
                echo "El telefono tiene que ser un número";
            }
        }
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["buscar"])) {
                if($nombre!=""){
                $archivo= "agenda.txt";
                $nombreBuscado = $_POST['nombre'];
                $archivo = 'agenda.txt';
                $file = fopen($archivo, 'r');
                $encontrado = false;
                while (!feof($file)) {
                    $linea = fgets($file);
                    if (strpos($linea, "Contacto: $nombreBuscado") !==false) {
                        echo "Contacto encontrado: $linea <br>";
                        $encontrado = true;
                    }
                }
                fclose($file);
                if (!$encontrado) {
                    echo "No se encontró ningún contacto con el nombre $nombreBuscado";
                    }
                }else {
                    echo "Tiene que introducir un nombre para iniciar la búsqueda";
                }
            }
    ?>