<?php
$conexion = mysqli_connect("127.0.0.1", "root","", "story's forum");
if(mysqli_connect_errno())
	{
		echo"No se pudo conectar a base de datos: ".mysqli_connect_errno();
	}
?>