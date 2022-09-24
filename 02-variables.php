<?php include 'includes/header.php';

$nombre = "Juan";
$apellido = "Perez";
$nombreCompleto = $nombre . " " . $apellido;
var_dump($nombreCompleto);

#Constantes
define('PI', 3.1416);
var_dump(PI);
#echo PI;

$poins = 50;
$name = "Juan";
$nickname = "El Pato";

echo "El jugador $name, con el apodo $nickname, tiene $poins puntos";

include 'includes/footer.php';
