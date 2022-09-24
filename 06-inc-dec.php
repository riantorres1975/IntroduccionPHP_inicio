<?php include 'includes/header.php';
#incremento y decremento
$numero1 = 10;
$numero2 = 5;

#Incremento
$numero1++;
echo $numero1;
echo "<br>";

#Decremento
$numero1--;
echo $numero1;
echo "<br>";

#Preincremento
++$numero1;
echo $numero1;
echo "<br>";

#Predecremento
--$numero1;
echo $numero1;
echo "<br>";

#Incremento
$numero1 += 5;
echo $numero1;
echo "<br>";

#Decremento
$numero1 -= 5;
echo $numero1;
echo "<br>";

#Incremento
$numero1 *= 5;
echo $numero1;
echo "<br>";

#Decremento
$numero1 /= 5;
echo $numero1;
echo "<br>";


include 'includes/footer.php';