<?php include 'includes/header.php';
// #Loops

for($i = 0; $i < 10; $i++){
    echo $i;
    echo"<br>";
    if($i === 5){
        echo 'Cinco';
        break;
    }
}
echo"<br>";

//While
$i = 0;
while($i < 10){
    echo $i;
    echo"<br>";
    $i++;

}

//Do while
$i = 0; //inicializador
do{
    echo $i;
    echo"<br>";
    $i++;
} while($i < 10);

//Foreach
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

foreach($cliente as $valor){
    echo $valor;
    echo"<br>";
}

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

foreach($clientes as $cliente){
    echo $cliente['nombre'] . ' es ' . $cliente['tipo'];
    echo"<br>";
}

//Continue
for($i = 0; $i < 10; $i++){
    if($i === 5){
        continue;
    }
    echo $i;
    echo"<br>";
}


include 'includes/footer.php';