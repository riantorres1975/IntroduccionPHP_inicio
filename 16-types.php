<?php include 'includes/header.php';


// #Types

function sumar($numero1, $numero2){
    return $numero1 + $numero2;
}

$resultado = sumar(10, 20);
echo $resultado;
echo "<br>";

function usuarioAutenticado(bool $autenticado) : string{
    return $autenticado ? 'El usuario esta autenticado' : 'El usuario no esta autenticado';
}

$usuario = usuarioAutenticado(true);
echo $usuario . "<br>";

$usuario = usuarioAutenticado(false);
echo $usuario . "<br>";



include 'includes/footer.php';