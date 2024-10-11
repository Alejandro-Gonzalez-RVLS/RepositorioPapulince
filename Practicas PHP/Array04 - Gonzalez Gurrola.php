<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Uso de Array 4</title>
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
   $datos = array(
   array(0, 0, 0),array(1, 1, 1),array(2, 2, 2));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }
?>
</body>
</html>