<?php include 'includes/header.php';
#string methods
$nombre = "Juan";
var_dump($nombre);
echo "<br>";
echo "El nombre es: $nombre";
echo "<br>";

#Mostrar la longitud de un string
echo strlen($nombre);
echo "<br>";

#Mostrar un string en mayusculas
echo strtoupper($nombre);
echo "<br>";

#Mostrar un string en minusculas
echo strtolower($nombre);
echo "<br>";

#Mostrar un string con la primera letra en mayuscula
echo ucfirst($nombre);
echo "<br>";

#Mostrar un string con la primera letra de cada palabra en mayuscula
echo ucwords($nombre);
echo "<br>";

#Reemplazar palabras de un string
echo str_replace("Juan", "Pedro", $nombre);
echo "<br>";

#Eliminar espacios en blanco
$texto = "     contenido     ";
var_dump($texto);
echo "<br>";
echo trim($texto);
echo "<br>";

#Eliminar variables
$year = 2021;
unset($year);


#Revisar si un string existe
echo strpos($nombre, "Juan");
echo "<br>";

#Revisar si un string existe
echo strpos($nombre, "Pedro");
echo "<br>";

#Concatenar strings
echo $nombre . " " . "Perez";
echo "<br>";

#Concatenar strings
echo "$nombre Perez";
echo "<br>";


include 'includes/footer.php';