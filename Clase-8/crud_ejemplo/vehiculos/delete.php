<?php
require_once '../shared/guard.php';
$title = 'Eliminar Vehículo';
require_once '../shared/header.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once '../shared/db.php';
    $vehiculo_model->delete($id);
    return header('Location: /vehiculos');
}
?>
<div class="container">
  <h1><?=$title?></h1>
  <p>¿Está seguro de eliminar el vehículo con el id <?=$id?>?</p>
  <form method="POST">
    <input class="btn btn-primary" type="submit" value="Aceptar">
    <a class="btn btn-danger" href="/vehiculos">Cancelar</a>
  </form>
</div>
