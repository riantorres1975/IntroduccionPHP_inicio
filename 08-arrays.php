<?php include 'includes/header.php';
#arrays
$carrito = ['Tablet', 'Television', 'Computadora'];

//Util para ver el contenido de un array
echo "<pre>"; 
var_dump($carrito); 
echo "</pre>";
echo "<br>";

echo $carrito[1];
echo "<br>";

echo count($carrito);
echo "<br>";
echo "<hr>";

$cliente = array('nombre' => 'Juan', 'saldo' => 200);
var_dump($cliente);
echo "<br>";

echo $cliente['nombre'];
echo "<br>";
echo "<hr>";

#metodos para arrays
$tecnologias = ['CSS', 'HTML', 'JavaScript', 'jQuery'];
echo "<pre>";
var_dump($tecnologias);
echo "</pre>";
echo "<br>";

//Agregar un elemento al final del array
array_push($tecnologias, 'Bootstrap');
echo "<pre>";
var_dump($tecnologias);
echo "</pre>";
echo "<br>";

//Eliminar el ultimo elemento del array
array_pop($tecnologias);
echo "<pre>";
var_dump($tecnologias);
echo "</pre>";
echo "<br>";

//Agregar un elemento al inicio del array
array_unshift($tecnologias, 'Bootstrap');
echo "<pre>";
var_dump($tecnologias);
echo "</pre>";
echo "<br>";

//Eliminar el primer elemento del array
array_shift($tecnologias);
echo "<pre>";
var_dump($tecnologias);
echo "</pre>";
echo "<br>";

//Ordenar un array
sort($tecnologias);
echo "<pre>";
var_dump($tecnologias);
echo "</pre>";




include 'includes/footer.php';