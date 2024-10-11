<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Problema de Libreta</title>
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
$Calif1=rand(1,10);
$Calif2=rand(1,10);
$Calif3=rand(1,10);
$Promedio=($Calif1+$Calif2+$Calif3)/3;

if ($Promedio<=6.4) {
	echo "Estás REPROBADO <p>";
}
	elseif ($Promedio>6.5) {
		echo "Estas APROBADO <p>";
	}

	echo "Tu calificación 1 es: $Calif1 <br>";
	echo "Tu calificación 2 es: $Calif2 <br>";
	echo "Tu calificación 3 es: $Calif3 <p>";
	echo "Tu calificación final es: $Promedio";

?>
</body>
</html>