<?php

@$datos = array(
	@"pregunta1" => $_POST['pregunta1'],
	@"pregunta2" => $_POST['pregunta2'],
	@"pregunta3" => $_POST['pregunta3'],
	@"pregunta4" => $_POST['pregunta4'],
);

@$archivo = fopen($_POST['data'].".cuestionario", "a");

fwrite($archivo, json_encode($datos));
fclose($archivo);

?>
