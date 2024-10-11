<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Creación de empleados usando "do while"</title>
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
$Empleado="Jorge";
$Sueldo=rand(2700,5000);
$Antiguedad=1;
$valor=10;


do {
 	if ($Antiguedad>=5) {
		echo "Trabajaste con nosotros $Antiguedad años <br>";
		echo "Tu sueldo principal era de: $$Sueldo <br>";

		$Sueldo=($Sueldo+($Sueldo*0.20));

		echo "Se aumentó un 20% de tu sueldo<br>";
		echo "Tu sueldo ahora es de $$Sueldo , gracias por trabajar mas de 5 años con nosotros $Empleado <p>";
}
	elseif ($Antiguedad<5) {
		echo "Trabajaste con nosotros $Antiguedad años <br>";
		echo "Tu sueldo principal era de: $$Sueldo <br>";

		$Sueldo=($Sueldo+($Sueldo*0.02));
		echo "Se aumentó un 2% de tu sueldo<br>";
		echo "Tu sueldo ahora es de $$Sueldo , gracias por trabajar con nosotros $Empleado <p>";
	}
	$Antiguedad ++;
 } while ($Antiguedad <= $valor); {
}
?>
</body>
</html>