<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Uso de valores aleatorios</title>
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

$num=rand(1,100);

echo "El numero elegido es: $num <p>";

if ($num>50){
	echo "El numero elegido es mayor a 50 <p>";

	} elseif ($num<50) {
		echo "El numero elegido es menor a 50 <p>";
		
	} elseif ($num=50) {
		echo "El numero elegido es igual a 50 <p>";
	}

?>
</body>
</html>