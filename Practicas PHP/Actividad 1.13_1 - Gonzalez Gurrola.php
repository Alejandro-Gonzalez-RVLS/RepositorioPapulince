<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calcular indice corporal</title>
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
$Peso=rand(30,80);
$Altura=rand(140, 200)/100;
$IMC=$Peso/($Altura*$Altura);
$IMCx=number_format($IMC, 2);

echo "Tu peso es de: $Peso Kg <br>";
echo "Tu altura es de $Altura <br>";
echo "Tu indice de masa corporal es de: $IMCx <p>";

	if ($IMCx<18.5) {
		echo "Tienes peso bajo";
}
	elseif ($IMCx>=18.5 && $IMCx<25) {
		echo "Tienes peso normal, felicidades";
}
	elseif ($IMCx>=25 && $IMCx<30) {
		echo "Tienes sobrepeso";
}
	elseif ($IMCx>=30) {
		echo "Tienes obesidad";
}
?>
</body>
</html>