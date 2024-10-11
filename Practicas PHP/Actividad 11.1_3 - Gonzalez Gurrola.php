<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 11.1 reto 3</title>
	<style type="text/css">
	body{
			background: black;
			text-align: center;
				font-size: 30px;
}
</style>
</head>
<body>
<?php
$Nombre='Carlos';

$Nombres = array('Ana', 'Carlos', 'Elena', 'Marco', 'Lucia', 'Javier', 'Sofía', 'Diego');

foreach ($Nombres as $NombresTotales) {

if ($Nombre===$NombresTotales) {
	echo "El nombre $Nombre está en el Array <p>";
	}
}
?>
</body>
</html>