<?php
require_once '../shared/guard.php';
$title = 'Crear Vehículo';
require_once '../shared/header.php';
$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once '../shared/db.php';
    $vehiculo_model->create($marca, $modelo);
    return header('Location: /vehiculos');
}
?>
<div class="container">
  <h1><?=$title?></h1>
<?php require_once './form.php'; ?>
</div>
