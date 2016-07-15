<?php
	require 'conexion.php';
	$id=$_POST['idel'];

	$query="DELETE FROM costos_medidas WHERE id=".$id;
	$c=$conexion->query($query);
	echo 'listo';
?>