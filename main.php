<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>

<?php

require_once "clases.php";
$areaTriangle = new Triangle;  
echo "El area del triangulo es: " . $areaTriangle -> area(5, 5);
echo "</br>";
echo "</br>";
$areaRectangle = new Rectangle;
echo "El area del rectangulo es: " . $areaRectangle -> area(5, 5);

?>

</body>
</html>
