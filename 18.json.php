<?php include 'includes/header.php';
//json
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

echo json_encode($cliente);
echo"<br>";

$prodcutos = array(
    array(
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ),
    array(
        'nombre' => 'Television',
        'precio' => 500,
        'disponible' => true
    ),
    array(
        'nombre' => 'Ordenador',
        'precio' => 1000,
        'disponible' => false
    )
);

$json = json_encode($prodcutos);
$json_toarry = json_decode($json);
echo $json;
echo"<br>";

echo"<pre>";
var_dump($json);
var_dump($json_toarry);
echo"</pre>";






include 'includes/footer.php';