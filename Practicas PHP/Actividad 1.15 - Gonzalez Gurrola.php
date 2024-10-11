<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calcular IVA</title>
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
$CompraTotal=rand(100,13000);
$IVA=$CompraTotal*0.15;

	if ($CompraTotal<1000) {
		$Descuento=$CompraTotal*0.05;
	}
	elseif ($CompraTotal>=1000 && $CompraTotal<5000) {
		$Descuento=$CompraTotal*0.10;
	}
	elseif ($CompraTotal>=5000 && $CompraTotal<10000) {
		$Descuento=$CompraTotal*0.12;
	}
	elseif ($CompraTotal>=10000) {
		$Descuento=$CompraTotal*0.16;
	}

$TotalPago=($CompraTotal+$IVA)-$Descuento;

echo "Compra sin IVA: $$CompraTotal <br>";
echo "IVA: $$IVA <br>";
echo "Descuento: $$Descuento <p>";
echo "Total a pagar: $$TotalPago";

?>
</body>
</html>