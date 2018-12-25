<?php
  require_once '../shared/guard.php';
  $title = 'Vehículos';
  require_once '../shared/header.php';
  require_once '../shared/db.php';
?>
<div class="container">
  <h1><?=$title?></h1>
  <table class="table table-striped table-bordered">
    <tr>
      <th>Id</th>
      <th>Marca</th>
      <th>Modelo</th>
      <th class="text-center">
        <a class="btn btn-success" href="/vehiculos/create.php">+</a>
      </th>
    </tr>
<?php
$vehiculos = $vehiculo_model->read();
if ($vehiculos) {
    foreach ($vehiculos as $vehiculo) {
        require './row.php';
    }
}
?>
  </table>
</div>
