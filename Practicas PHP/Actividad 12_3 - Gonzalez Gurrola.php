<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actividad 12, reto 3</title>
</head>
<body>
<?php
$Productos = array('Camisa', 'Pantalón', 'Cinturón');

	echo "Productos primer reto; <p>";
foreach ($Productos as $ProductosX) {
	echo "$ProductosX  <p>";
}
sort($Productos);
var_export($Productos);

array_push($Productos, "Gorra", "Calcetines",);
	
echo "<p>Productos segundo reto: ";
foreach ($Productos as $ProductosX) {
	echo "<p> $ProductosX  <p>";
}
sort($Productos);
var_export($Productos);

echo "<p> Productos tercer reto: <p>";
rsort($Productos);
var_export($Productos);
?>
</body>
</html>