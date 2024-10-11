<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Uso de Array 5</title>
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
  $array_numerico_indexado = array(1, "Gato", 2, "Perro");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }

   array_push($array_numerico_indexado, 3, "Caballo");

   foreach($array_numerico_indexado as $mascota){
      echo "<p> $mascota <BR>";
   }
?>
</body>
</html>