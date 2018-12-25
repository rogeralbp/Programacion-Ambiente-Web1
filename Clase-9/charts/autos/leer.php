<?php
  require_once '../shared/guard.php';
  require_once '../shared/db.php';
  $autos = $auto_model->read();
  echo json_encode($autos);
