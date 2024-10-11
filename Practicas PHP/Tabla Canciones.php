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
			background-color: lightblue;
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
			background-color: blueviolet;}

		tr:hover td{
			background-color: #369681;
			color: darkblue;
		}
		
	</style>
</head>
<body>
<?php

echo '<table border="2">
<thread>
<tr>
	<td>Grupo Musical</td>
	<td>Genero</td>
	<td>País</td>
	<td>Integrantes</td>
	</tr>
	</thread>


<tr>
	<td>Marilyn Manson</td>
	<td>Rock</td>
	<td>Estados Unidos</td>
	<td>Marilyn Manson, Jeordy White, Wes Borland, Tyler Bates, Etc</td>
	</tr>


<tr>
	<td>Falling in Reverse</td>
	<td>Rock/Rap</td>
	<td>Estados Unidos</td>
	<td>Ronnie Radke, Luke Holland, Derek Jones, Tyler Burgess, Max Georgiev</td>
	</tr>

<tr>
	<td>Skillet</td>
	<td>Rock</td>
	<td>Estados Unidos</td>
	<td>John Cooper, Jen Ledger, Korey Cooper, Seth Morrison</td>
	</tr>

<tr>
	<td>The Warning</td>
	<td>Rock</td>
	<td>México</td>
	<td>Daniela Villarreal, Paulina Villarreal, Alejandra Villarreal</td>
	</tr>

<tr>
	<td>Three Days Grace</td>
	<td>Rock</td>
	<td>Estados Unidos</td>
	<td>Matt Walst, Barry Stock, Neil Sanderson, Brad Walst</td>
	</tr>

<tr>
	<td>Guns N Roses</td>
	<td>Rock</td>
	<td>Estados Unidos</td>
	<td>Axl Rose, Saul Hudson (Slash), Richard Fortus, Frank Ferrer, Dizzy Reed, etc</td>
	</tr>

<tr>
	<td>Imagine Dragons</td>
	<td>Pop-Rock</td>
	<td>Estados Unidos</td>
	<td>Dan Reynolds, Daniel Wayne Sermon, Daniel Platzman, Ben McKee</td>
	</tr>

<tr>
	<td>Palaye Royale</td>
	<td>Rock</td>
	<td>Estados Unidos</td>
	<td>Remington Leith, Emerson Barret, Sebastian Danzig</td>
	</tr>

<tr>
	<td>Rammstein</td>
	<td>Rock/Metal</td>
	<td>Alemania</td>
	<td>Till Lindermann, Richard Z. Kruspe, Christian Lorenz, Christoph Shneider, Paul Landers, Oliver Riedel</td>
	</tr>

<tr>
	<td>Måneskin</td>
	<td>Rock</td>
	<td>Italia</td>
	<td>Damiano David, Victoria de Angelis, Ethan Torchio, Thomas Raggi</td>
	</tr>

</table>';

?>
</body>
</html>