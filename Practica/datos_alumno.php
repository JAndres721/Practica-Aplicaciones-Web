<?php
$nombre=$_REQUEST['nombre'];
$telefono=$_REQUEST['telefono'];
$matriculado=$_POST['matricula'];
$enseñanza=$_POST['enseñanza'];
if(trim($nombre=="") || trim($telefono)=="") {
    echo "Tiene que escibir un nombre y el télefono tiene que ser un número";
    }elseif(is_numeric($telefono)){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                   
                $opcionDatos = $_POST["datos"];
                if ($opcionDatos == "pantalla") {
                    if(isset($matriculado)){
                        if(isset($enseñanza))
                        {
                        echo '"El alumno <b>'.$nombre.'</b>, con télefono <b>'.$telefono.' esta matriculado en '.$enseñanza.'</b>"';
                        }
                        else{
                        echo "Tiene que elegir en que enseñanza esta matriculado";
                        }
                    }
                    else{
                        echo '"El alumno <b>'.$nombre.'</b>, con télefono <b>'.$telefono.' no esta matriculado</b>"';
                    }

                } elseif ($opcionDatos == "archivo") {
                    if(isset($matriculado)){
                        if(isset($enseñanza))
                        {
                            $nombrArchivo = "datos.txt";
                            $mensaje = "El alumno $nombre, con telefono $telefono esta matriculado en $enseñanza";
                            
                            $archivo = fopen ($nombrArchivo, "w");
        
                            fwrite($archivo, $mensaje);
        
                            fclose($archivo);

                            echo "<a href='./datos.txt'>Mostrar datos</a>";
                        }
                        else{
                        echo "Tiene que elegir en que enseñanza esta matriculado";
                        }
                    }
                    else{
                        echo '"El alumno <b>'.$nombre.'</b>, con télefono <b>'.$telefono.' no esta matriculado</b>"';
                    }
                    

                }
            }
        }else{
            echo "El télefono tiene que ser un número";
        }

?>



