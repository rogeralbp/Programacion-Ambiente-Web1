<?php
require_once '../shared/guard.php';
$title = 'Editar Vehículo';
require_once '../shared/header.php';
require_once '../shared/db.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
$vehiculo = $vehiculo_model->find($id);
$kilometraje = filter_input(INPUT_POST, 'kilometraje', FILTER_SANITIZE_STRING);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
    $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
    $vehiculo_model->update($id, $marca, $modelo, $kilometraje);
    return header('Location: /vehiculos');
}
?>
<div class="container">
  <h1><?=$title?></h1>
<?php require_once './form.php'; ?>
</div>
