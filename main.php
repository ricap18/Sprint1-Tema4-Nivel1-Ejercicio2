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
$areaTriangle = new Triangle(8, 10);  
echo "El area del triangulo es: " . $areaTriangle -> area();
echo "</br>";
$areaRectangle = new Rectangle(5, 7);
echo "El area del rectangulo es: " . $areaRectangle -> area();

?>

</body>
</html>
