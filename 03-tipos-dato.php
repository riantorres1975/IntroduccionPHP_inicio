<?php include 'includes/header.php';
#Php tine 8 tipos de datos

#Entero
$numero = 10;
var_dump($numero);

#Flotante
$numero = 10.5;
var_dump($numero);

#Cadenas de texto
$texto = "Hola Mundo";
var_dump($texto);

#Booleanos
$verdadero = true;
$false = false;
var_dump($verdadero);
var_dump($false);

#Arreglos
$colores = array("Rojo", "Azul", "Verde");
var_dump($colores);

#Objetos
class Cliente{
    public $nombre;
    public function __construct(){
        $this->nombre = "Juan";
    }
}

$cliente = new Cliente();
var_dump($cliente);

#Nulos
$nulo = null;
var_dump($nulo);

#Recursos
$archivo = fopen('includes/header.php', 'r');
var_dump($archivo);
fclose($archivo);


include 'includes/footer.php';