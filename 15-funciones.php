<?php include 'includes/header.php';
//Funciones

declare(strict_types=1); //Para que no se pueda pasar un string a una funcion que espera un int

function saludar($nombre){
    echo "Hola $nombre";
}

saludar('Juan');
echo "<br>";

function sumar($numero1, $numero2){
    echo $numero1 + $numero2;
}

sumar(10, 20);
echo "<br>";

function sumar2($numero1, $numero2){
    return $numero1 + $numero2;
}

$resultado = sumar2(10, 20);
echo $resultado;
echo "<br>";

function sumar3($numero1, $numero2): int{
    return $numero1 + $numero2;
}

$resultado = sumar3(3, 20);
echo $resultado;
echo "<br>";

function sumar4($numero1, $numero2): int{
    return $numero1 + $numero2;
}

$resultado = sumar4(10, 20);
echo $resultado;






include 'includes/footer.php';