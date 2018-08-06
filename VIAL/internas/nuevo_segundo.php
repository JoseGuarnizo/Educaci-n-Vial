<?php

@$datos = array(
	@"pregunta1" => $_POST['pregunta1'],
	@"pregunta2" => $_POST['pregunta2'],
);

@$archivo = fopen($_POST['data'].".contesta", "a");

fwrite($archivo, json_encode($datos));
fclose($archivo);

header("Location: http://localhost:8081/Educaci-n-Vial/VIAL/internas/Contesta.html")


?>