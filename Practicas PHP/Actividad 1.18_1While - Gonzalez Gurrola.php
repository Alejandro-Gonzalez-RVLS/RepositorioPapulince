<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Problema Calificaciones usando "While"</title>
	<style type="text/css">
	body{
			background: cadetblue;
			text-align: center;
				font-size: 30px;
}
</style>
</head>
<body>
<?php
//Practica original: "Problema Calificaciones"

$Calif1=1;
$Calif2=1;
$Calif3=1;
$valor=10;

while ($Calif1 <= $valor && $Calif2 <= $valor && $Calif3 <= $valor) {
	$Promedio=($Calif1+$Calif2+$Calif3)/3;

	echo "Tu calificación 1 es: $Calif1 <br>";
	echo "Tu calificación 2 es: $Calif2 <br>";
	echo "Tu calificación 3 es: $Calif3 <br>";
	echo "Tu calificación final es: $Promedio <br>";


if ($Promedio<=6.4) {
	echo "Estás REPROBADO <p>";
}
	elseif ($Promedio>6.5) {
		echo "Estas APROBADO <p>";
	}
	
	$Calif1 ++;
	$Calif2 ++;
	$Calif3 ++;
}
?>
</body>
</html>