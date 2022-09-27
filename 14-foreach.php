<?php include 'includes/header.php';
//Forech
$productos = array(
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


foreach($productos as $producto){
    echo $producto['nombre'] . ": ";
    echo $producto['precio'] . ": ";
    echo $producto['disponible'] . ": ";
    echo"<br>";
}

foreach($productos as $producto){
    echo $producto['nombre'] . ": ";
    echo $producto['precio'] . ": ";
    echo $producto['disponible'] ? 'Disponible' : 'No disponible';
    echo"<br>";
}

foreach($productos as $producto){ ?>
    <li>
        <?php echo $producto['nombre'] . ": $"; ?>
        <?php echo $producto['precio'] . ": "; ?>
        <?php echo $producto['disponible'] ? 'Disponible' : 'No disponible'; ?>
    </li>
  <?php 
}

include 'includes/footer.php';