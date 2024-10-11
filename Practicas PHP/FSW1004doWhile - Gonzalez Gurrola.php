<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contador con do while</title>
</head>
<body>
<?php
$valor= rand(1,100);
$inicio= 1;

echo "Valor: $valor <br>";
echo "Contador $inicio <p>";

do {
 	echo "$inicio <br>";
	$inicio ++;
 } while ($inicio <= $valor); {
}
?>
</body>
</html>