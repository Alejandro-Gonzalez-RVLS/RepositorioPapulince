<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 3 Array</title>
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
   $equipo = array('portero'=>'Gera','defensa'=>'Javier','medio'=>'Buho','delantero'=>'Zaid');

   foreach($equipo as $posicion=>$jugador){
     echo "El Jugador " . $jugador . " es el " . $posicion;
     echo "<br>";
   }
?>
</body>
</html>