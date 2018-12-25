<?php
require_once '../shared/guard.php';
require_once '../shared/db.php';
$usuario_id = filter_input(INPUT_POST, 'usuario_id', FILTER_SANITIZE_STRING);
$monto = filter_input(INPUT_POST, 'monto', FILTER_SANITIZE_STRING);
$venta_model->create($usuario_id, $monto);