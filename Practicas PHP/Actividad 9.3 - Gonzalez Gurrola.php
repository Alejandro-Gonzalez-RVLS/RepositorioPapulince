<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alumnos aprobados/reprobados</title>
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
$num=rand(1,10);

if ($num<6) {
	echo "Alumno Reprobado, su calificación es: $num";
}
	elseif ($num>=6) {
		echo "Alumno Aprobado, su calificación es: $num";
	}
?>
</body>
</html>