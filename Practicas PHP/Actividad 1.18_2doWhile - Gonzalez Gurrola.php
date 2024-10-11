<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Numeros a comparar utilizando "doWhile"</title>
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
$num1=rand(1,30);
$num2=rand(1,30);
$num3=rand(1,30);
$valor=30;

 do{
        echo "Numeros a comparar: $num1, $num2, $num3 <p>";

	if ($num1>=$num2 && $num1>=$num3) {
		$NumMayor=$num1;
		if ($num2>=$num3) {
			$NumMediano=$num2;
			$NumMenor=$num3; }
			elseif ($num3>=$num2) {
				$NumMediano=$num3;
				$NumMenor=$num2;
		}
	}

	elseif ($num2>=$num1 && $num2>=$num3) {
		$NumMayor=$num2;
		if ($num3>=$num1) {
			$NumMediano=$num3;
			$NumMenor=$num1; }
			elseif ($num1>=$num3) {
				$NumMediano=$num1;
				$NumMenor=$num3;
		}
	}

	elseif ($num3>=$num1 && $num3>=$num2) {
		$NumMayor=$num3;
		if ($num2>=$num1) {
			$NumMediano=$num2;
			$NumMenor=$num1; }
			elseif ($num1>=$num2) {
				$NumMediano=$num1;
				$NumMenor=$num2;
		}
	}

	echo "El numero mayor es: $NumMayor <br>";
	echo "El numero mediano es: $NumMediano <br>";
	echo "El numero menor es: $NumMenor <p>";

	$num1++;
	$num2++;
	$num3++;
   }	while ($num1<=$valor && $num2<=$valor && $num3<=$valor) 
?>
</body>
</html>