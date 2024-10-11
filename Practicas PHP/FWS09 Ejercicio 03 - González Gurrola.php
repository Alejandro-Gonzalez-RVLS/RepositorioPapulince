<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Uso de la sentencia "If"</title>
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
	$fecha=date("d/m/y"); 
   $dia=date("d");

   echo "$fecha <p>";
   echo "$dia <p>";
   
   if ($dia<=10){
      echo "Sitio activo"; 
   } else { 
      echo "Sitio fuera de servicio"; 
   }
?>
</body>
</html>