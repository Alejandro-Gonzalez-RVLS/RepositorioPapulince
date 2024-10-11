<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Suma de dos numeros con la opción "for"</title>
</head>
<body>
<?php
//Problema original: "Actividad 1.9"

$X=7;
$Y=5;

echo "Suma, resta, división y multiplicación de $X y $Y con la función 'for' <p>";

for ($i=1; $i <=7 ; $i++) { 
	echo "La suma de $i y $Y es igual a: <br>";
		$resultado=$i+$Y;
		echo "$i+$Y= $resultado <br>";
	}
	echo '<p>';


for ($i=1; $i <=7 ; $i++) { 
	echo "La resta de $i y $Y es igual a: <br>";
		$resultado=$i-$Y;
		echo "$i+$Y= $resultado <br>";
	}
echo '<p>';


for ($i=1; $i <=7 ; $i++) { 
	echo "La division de $i y $Y es igual a: <br>";
		$resultado=$i/$Y;
		echo "$i+$Y= $resultado <br>";
	}
echo '<p>';


echo "La multiplicación de $X y $Y es igual a:  ";
for ($i=1; $i <=7 ; $i++) { 
	echo "La multiplicación de $i y $Y es igual a: <br>";
		$resultado=$i*$Y;
		echo "$i+$Y= $resultado <br>";
	}
echo '<p>';

?>
</body>
</html>