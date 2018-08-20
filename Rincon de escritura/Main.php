<!DOCTYPE html>
<html>
<head>
	<title>Story's forum</title>
	<link rel="stylesheet" type="text/css" href="hispachancodeclaro.css">
	<link rel="stylesheet" type="text/css" href="img_global.css">
	<link rel="stylesheet" type="text/css" href="hispachan.css">
</head>
</head>
<body>
	<div class="navbar barra" align="center" style="font-size: 120%; line-height: 140%;">
		<a title="Crear" href="Create.php" target="_top">Crear nuevas historias</a>
	</div>

	<center><h1 >Story's forum</h1></center>

<?php 
	include("Conexion.php");

	$consulta = "select * from story";

	$registros = mysqli_query($conexion, $consulta) or die("Problemas en la consulta:".mysqli_error($conexion));
?>
<?php
	  	while($reg=mysqli_fetch_array($registros))
		{
			echo "<hr>";
			echo "<h2>". $reg['Tittle'] ."</h2>";
			echo "<br>";
			echo $reg['Texto'];
			echo "<br>";
			echo "<br>";
			
		
		}
	?>
</body>
</html>