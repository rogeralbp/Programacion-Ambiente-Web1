<?php 

function contarLetras($texto){
	return strlen($texto);
}

$texto = filter_input(INPUT_GET, 'texto', FILTER_SANITIZE_STRING);