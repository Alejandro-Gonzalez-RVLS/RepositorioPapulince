<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 11.1 reto 1</title>
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
$numeros = array(range(1, 100));

for ($i = 1; $i <= $numeros; $i++) {
       if ($i % 2 == 0 && $i<=100) {
        echo "$i <p>";
    }
}
?>
</body>
</html>