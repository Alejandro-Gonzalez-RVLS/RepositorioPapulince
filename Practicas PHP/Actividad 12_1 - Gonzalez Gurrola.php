<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actividad 12, reto 1</title>
</head>
<body>
<?php
$Productos = array('Camisa', 'Pantalón', 'Cinturón');

foreach ($Productos as $ProductosX) {
	echo "$ProductosX  <p>";
}
sort($Productos);
var_export($Productos);
?>
</body>
</html>