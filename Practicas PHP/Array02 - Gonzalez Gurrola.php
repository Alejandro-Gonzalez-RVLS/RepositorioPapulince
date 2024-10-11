<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Uso de Array 2</title>
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
   $nombre = "Anna"; 
   $array = array(1, 2, 3, "casa", $nombre);

   //Se obtiene el número de elementos 
   $longitud = count($array);

   //Se obtiene el contenido del Array
   var_dump($array);

   echo "Longitud: $longitud <br>";
   //Se imprime el elemento que se encuentra en la posicion 1 del arreglo
   echo $array[1];
   echo "<br>";

   //Recorre todos los elementos 
   for($i=0; $i<$longitud; $i++){ 
      //Se obtiene el valor de cada elemento 
      echo $array[$i]; 
      echo "<br>"; 
   }
?>
</body>
</html>