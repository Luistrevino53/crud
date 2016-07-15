<?php 
	require 'conexion.php';
	$query="SELECT 
			c.id,
			p.Nombre,
			t.tipo,
			r.tipo as premium,
			v.seccion,
			m.medidas,
			l.tipo as pagina,
			c.costo
		FROM costos_medidas c
		JOIN periodicos p ON c.medio_id = p.idPeriodico
		JOIN tipoColorAnuncio t ON c.color_id = t.id
		JOIN cost_premium_tipo r ON c.premium_tipo_id=r.id
		JOIN seccionesPeriodicos v ON c.seccion_id = v.idSeccion
		JOIN medidasAnuncio m ON c.tamano_id = m.id_medidas
		JOIN cost_tipo_pagina l ON c.pagina_tipo_id = l.id
		ORDER BY c.id";

	$data=[];
	$a=$conexion->query($query);
	$i=0;
	while($row=$a->fetch_array()){
		$data[$i]=$row;
		$i++;
	}
	echo json_encode($data);
?>