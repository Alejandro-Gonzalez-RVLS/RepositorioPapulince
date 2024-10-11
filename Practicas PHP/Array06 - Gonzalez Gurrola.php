<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Uso de Array 06</title>
</head>
<body>
<?php
$arraynumerico = array(1, 3, 2, 5, 4, 7, 6);

sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

rsort($arraynumerico);
var_export($arraynumerico);
?>
</body>
</html>