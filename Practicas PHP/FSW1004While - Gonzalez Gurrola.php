<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$valor= rand(1,100);
$inicio= 1;

echo "Valor: $valor <br>";
echo "Contador $inicio <p>";

while ($inicio <= $valor) {
	echo "$inicio <br>";
	$inicio ++;
}
?>
</body>
</html>