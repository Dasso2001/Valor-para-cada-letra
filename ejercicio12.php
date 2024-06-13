<?php
$x = $_POST['x'];
$y = $_POST['y'];
$z = $_POST['z'];

list($x, $y, $z) = array($z, $x, $y);

echo "Valores originales:<br>"; // muestra los valores originales 
echo "X: $x<br>";
echo "Y: $y<br>";
echo "Z: $z<br>";
    
echo "<br>Valores rotados:<br>"; // muestra los valores rotados
echo "X: $z<br>"; // x con contenido de z
echo "Y: $x<br>"; // y con contenido de x
echo "Z: $y<br>"; // z con contenido de y
?>