<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>

	<style type="text/css">
		body{
			background-color: black;
			font-family: Arial;
			color: white;
			width: 100%;}


		table{
			background-color: white;
			text-align: center;
			border-collapse: collapse;
			width: 50%;
			color: black;
			margin-top: 2%;
			margin-left: 25%;
		}


		thead{
			background-color: green;
			border-bottom: solid 5px #0F362D;
			color: white;
		}


		th,td{
			padding: 25px;}

		tr:nth-child(even){
			background-color: #ddd;}

		tr:hover td{
			background-color: #369681;
			color: white;
		}

		
	</style>
</head>
<body>
<?php

echo '<table border="2">
<thread>
<tr>
	<td>Ejercicio</td>
	<td>Repeticiones</td>
	<td>Kilogramos</td>
	</tr>
	</thread>


<tr>
	<td>Pierna</td>
	<td>20</td>
	<td>25</td>
	</tr>


<tr>
	<td>Gluteo</td>
	<td>20</td>
	<td>50</td>
	</tr>

<tr>
	<td>Espalda</td>
	<td>20</td>
	<td>40</td>
	</tr>

<tr>
	<td>Pecho</td>
	<td>25</td>
	<td>40</td>
	</tr>

<tr>
	<td>Cuello</td>
	<td>30</td>
	<td>15</td>
	</tr>

</table>';

?>
</body>
</html>