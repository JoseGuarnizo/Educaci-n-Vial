<?php

@$datos = array(
	@"nombre" => $_POST['nombre'],
);

@$archivo = fopen($_POST['data'].".dat", "a");

fwrite($archivo, json_encode($datos));
fclose($archivo);

?>

<html>
<body>
	<head>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/stylelogic.css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>		
	</head>

	<style type="text/css">

	</style>
	
	<div id="contenedor">
		<center>
			<h3>LIBROS DE TRABAJO</h3>
			<a title="luces" href="http://localhost:8081/Educaci-n-Vial/VIAL/internas/menu_actividad_segundo.html"><img src="imagenes/luces.png" alt="luces"/></a>
			</br>
			</br>
			</br>
			<a title="seguro" href="http://localhost:8081/Educaci-n-Vial/VIAL/internas/menuactividad.html"><img src="imagenes/seguro.png" alt="seguro"/></a>
		</center>
		</br>
		</br>
	</div>

</body>
</html>