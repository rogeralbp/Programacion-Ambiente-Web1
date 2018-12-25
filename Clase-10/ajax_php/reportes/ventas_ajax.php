<?php
  require_once '../shared/guard.php';
  require_once '../shared/db.php';
  $email        = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_STRING);
  $fecha_inicio = filter_input(INPUT_GET, 'fecha_inicio', FILTER_SANITIZE_STRING);
  $fecha_fin    = filter_input(INPUT_GET, 'fecha_fin', FILTER_SANITIZE_STRING);
  $reporte = $venta_model->reporteVentas($email, $fecha_inicio, $fecha_fin);
  echo json_encode($reporte);
