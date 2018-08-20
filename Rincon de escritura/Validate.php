<?php

include("Conexion.php");

$insertar= "INSERT INTO story(Tittle, Texto) VALUES ('$_REQUEST[subject]', '$_REQUEST[message]')";

mysqli_query($conexion, $insertar) or die ("Problemas al guardar la nueva historia " . mysqli_error);

echo "La historia se guardo correctamente.";

mysqli_close($conexion);

header("location:Main.php");
?>