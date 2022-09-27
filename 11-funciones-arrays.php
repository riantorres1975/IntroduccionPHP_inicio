<?php include 'includes/header.php';
#Funiones array
// Create an array  
$carrito = ['Tablet', 'Television', 'Computadora'];
// Add to the end of the array
array_push($carrito, 'Audifonos', 'Teclado');
// Add to the beginning of the array
array_unshift($carrito, 'Celular', 'Bocinas');
// Remove from the end of the array
array_pop($carrito);
// Remove from the beginning of the array
array_shift($carrito);
// Check if an item exists in the array
$result = in_array('Tablet', $carrito);
var_dump($result);
// Search an item in the array
$busqueda = array_search('Tablet', $carrito);
var_dump($busqueda);
// Turn an array into a string
$string = implode(",", $carrito);
var_dump($string);

//Ordenar arreglo asort, arsort, ksort, krsort
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);
asort($cliente); //Ordena el arreglo por valor de menor a mayor
var_dump($cliente);
arsort($cliente); //Ordena el arreglo por valor de mayor a menor
var_dump($cliente);
ksort($cliente); //Ordena el arreglo por llave de menor a mayor 
var_dump($cliente);
krsort($cliente); //Ordena el arreglo por llave de mayor a menor
var_dump($cliente);

//Ordenar arreglo multidimensional
$clientes = array(
    array(
        'saldo' => 200,
        'tipo' => 'Premium',
        'nombre' => 'Juan'
    ),
    array(
        'saldo' => 100,
        'tipo' => 'Normal',
        'nombre' => 'Pedro'
    ),
    array(
        'saldo' => 300,
        'tipo' => 'Premium',
        'nombre' => 'Pablo'
    )
);

function ordenar($a, $b){
    return $a['saldo'] - $b['saldo'];
}

usort($clientes, 'ordenar');
var_dump($clientes);

$azaz = new NumberFormatter("es", NumberFormatter::SPELLOUT);
$text = $azaz->format(34534);
echo $text;



include 'includes/footer.php';