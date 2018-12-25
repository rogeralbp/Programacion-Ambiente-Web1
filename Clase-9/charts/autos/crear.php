<?php
require_once '../shared/guard.php';
require_once '../shared/db.php';
$marca        = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
$modelo 	  = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);

$auto_model-> create($marca, $modelo);
