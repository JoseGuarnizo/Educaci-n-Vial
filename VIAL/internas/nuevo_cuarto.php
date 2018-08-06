<?php

@$datos = array(
	@"pregunta1" => $_POST['pregunta1'],
	@"pregunta2" => $_POST['pregunta2'],
	@"pregunta3" => $_POST['pregunta3'],
	@"pregunta4" => $_POST['pregunta4'],
	@"pregunta5" => $_POST['pregunta5'],
	@"pregunta6" => $_POST['pregunta6'],
	@"pregunta7" => $_POST['pregunta7'],
	@"pregunta8" => $_POST['pregunta8'],
	@"pregunta9" => $_POST['pregunta9'],
	@"pregunta10" => $_POST['pregunta10'],
	@"pregunta11" => $_POST['pregunta11'],
	@"pregunta12" => $_POST['pregunta12'],
);

@$archivo = fopen($_POST['data'].".contestatercero", "a");

fwrite($archivo, json_encode($datos));
fclose($archivo);

header("Location: http://localhost:8081/Educaci-n-Vial/VIAL/internas/contesta_tercero.html")


?>