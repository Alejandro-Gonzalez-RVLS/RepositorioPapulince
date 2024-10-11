<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Uso de la función "Date"</title>
	<style type="text/css">
	body{
			text-align: center;
				font-size: 30px;
}
</style>
</head>
<body>
<?php
$fecha=date("D");

if ($fecha == "Mon") {
	echo "El día de hoy es Lunes";
}
	elseif ($fecha == "Tue") {
		echo "El día de hoy es Martes";
	}
	elseif ($fecha == "Wed") {
		echo "El día de hoy es Miercoles";
	}
	elseif ($fecha == "Thu") {
		echo "El día de hoy es Jueves";
	}
	elseif ($fecha == "Fri") {
		echo "El día de hoy es Viernes";
	}
	elseif ($fecha == "Sun") {
		echo "El día de hoy es Sábado";
	}
	elseif ($fecha == "Sat") {
		echo "El día de hoy es Domingo";
	}
echo "$fecha";
?>
</body>
</html>