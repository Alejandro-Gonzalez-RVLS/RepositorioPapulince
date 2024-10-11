<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arreglo Calificaciones</title>
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
$Calificaciones = array(
'Sofía' => 6,
'Mateo' => 8,
'Valentina' => 9.5,
'Lucas' => 7.4,
'Isabella' => 6.1);

foreach ($Calificaciones as $Alumno => $Calificacion) {
	echo "La calificación de $Alumno es: $Calificacion <br>";
}

echo "<p>";

arsort($Calificaciones);
foreach ($Calificaciones as $Alumno => $Calificacion) {
	echo "La calificación de $Alumno es: $Calificacion <br>";
}

?>
</body>
</html>