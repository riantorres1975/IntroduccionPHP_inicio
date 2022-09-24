<?php include 'includes/header.php';
#Operadores de comparacion
$numero1 = 10;
$numero2 = "10";

#Igual
var_dump($numero1 == $numero2);
echo "<br>";

#Identico
var_dump($numero1 === $numero2);
echo "<br>";

#Diferente
var_dump($numero1 != $numero2);
echo "<br>";

#No identico
var_dump($numero1 !== $numero2);
echo "<br>";

#Menor que
var_dump($numero1 < $numero2);
echo "<br>";

#Mayor que
var_dump($numero1 > $numero2);
echo "<br>";

#Menor o igual que
var_dump($numero1 <= $numero2);
echo "<br>";

#Mayor o igual que
var_dump($numero1 >= $numero2);
echo "<br>";


include 'includes/footer.php';