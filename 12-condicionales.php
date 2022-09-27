<?php include 'includes/header.php';
// #Condicionales
// if(condicion){
//     //Codigo a ejecutar si la condicion es verdadera
// } else {
//     //Codigo a ejecutar si la condicion es falsa
// }
// $auth = false;
// if($auth){
//     echo 'El usuario esta autenticado';
// } else {
//     echo 'El usuario no esta autenticado';
// }

$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

if($cliente['tipo'] == 'Premium'){
    echo 'El cliente es Premium';
} else {
    echo 'El cliente no es Premium';
}

//Operador ternario
echo $cliente['tipo'] == 'Premium' ? 'El cliente es Premium' : 'El cliente no es Premium';

//Switch
$tecnologia = 'CSS';
switch($tecnologia){
    case 'PHP':
        echo 'PHP, Lenguaje de programacion';
        break;
    case 'JS':
        echo 'JS, Lenguaje de programacion';
        break;
    case 'CSS':
        echo 'CSS, Hojas de estilo';
        break;
    default:
        echo 'No se encontro coincidencia';
        break;
}

echo "<br>";

//Goto
goto marca;
echo 'Instruccion 1';
echo 'Instruccion 2';
echo 'Instruccion 3';
echo 'Instruccion 4';
echo 'Instruccion 5';
marca:
echo 'Me he saltado 5 echos';





include 'includes/footer.php';