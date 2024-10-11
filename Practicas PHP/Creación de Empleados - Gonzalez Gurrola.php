<!DOCTYPE html>
<html>
<head>
	<title>Registro Empleados</title>
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
$Empleado="Jorge";
$Sueldo=rand(2700,5000);
$Antiguedad=rand(1,10);

	if ($Antiguedad>=5) {
		echo "Trabajaste con nosotros $Antiguedad años <br>";
		echo "Tu sueldo principal era de: $$Sueldo <p>";

		$Sueldo=($Sueldo+($Sueldo*0.20));

		echo "Se aumentó un 20% de tu sueldo<br>";
		echo "Tu sueldo ahora es de $$Sueldo , gracias por trabajar mas de 5 años con nosotros $Empleado";
}
	elseif ($Antiguedad<5) {
		echo "Trabajaste con nosotros $Antiguedad años <br>";
		echo "Tu sueldo principal era de: $$Sueldo <p>";

		$Sueldo=($Sueldo+($Sueldo*0.02));
		echo "Se aumentó un 2% de tu sueldo<br>";
		echo "Tu sueldo ahora es de $$Sueldo , gracias por trabajar con nosotros $Empleado";
	}
?>
</body>
</html>