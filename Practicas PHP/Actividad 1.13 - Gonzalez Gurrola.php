<!DOCTYPE html>
<html>
<head>
	<title>Compras</title>
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
$Art1="Pantalla 24 pulgadas";
$PrecioArt1=rand(1000,2500);
$Art2="Tarjeta Grafica RX580";
$PrecioArt2=rand(1300, 2000);
$Art3="Iphone 8";
$PrecioArt3=rand(1200,2000);
$CompraTotal=$PrecioArt1+$PrecioArt2+$PrecioArt3;

echo "Usted compró: $Art1, $Art2 y $Art3 <p>";
echo "Precio $Art1: $$PrecioArt1 <br>";
echo "Precio $Art2: $$PrecioArt2 <br>";
echo "Precio $Art3: $$PrecioArt3 <p>";

	if ($CompraTotal>5000) {
		echo "Compra total: $$CompraTotal <br>";
		echo "Tienes un descuento de 10% <p>";

		$CompraTotal=($CompraTotal-($CompraTotal*0.10));
		echo "Compra total con descuento: $$CompraTotal";
	}
	elseif ($CompraTotal<=5000) {
		echo "Compra total: $$CompraTotal <br>";
		echo "Tienes un descuento de 5% <p>";

		$CompraTotal=($CompraTotal-($CompraTotal*0.05));
		echo "Compra total con descuento: $$CompraTotal";
	}

?>
</body>
</html>