<?php 
	include 'conexion.php';

	$query="SELECT Nombre , idperiodico FROM periodicos";
	$option=[];
	$a=$conexion->query($query);
	$i=0;
	while($row=$a->fetch_array()){
		$option[$i]=$row;
		$i++;
	}
	//echo'hola';
	echo json_encode($option);
?>
