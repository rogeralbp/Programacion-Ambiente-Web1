<?php
  require_once '../shared/guard.php';
  $title = 'Vehículos';
  require_once '../shared/header.php';
  require_once '../shared/db.php';

 $marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
 $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
 $kilometraje1 = filter_input(INPUT_POST, 'kilometraje1', FILTER_SANITIZE_STRING);
 $kilometraje2 = filter_input(INPUT_POST, 'kilometraje2', FILTER_SANITIZE_STRING);

?>

<div class="container">

  <form method="POST">

  <div class="form-group">
    <label>Marca</label>
    <input type="text" class="" name="marca" placeholder="Marca"  value="<?= $marca ?>">
  </div>

  <div class="form-group">
    <label>Modelo</label>
    <input type="num" class="" name="modelo" placeholder="Modelo"  value="<?= $modelo ?>">
  </div>

  <div class="form-group">
    <label>KiloMetraje Desde:</label>
    <input type="num" class="" name="kilometraje1" placeholder="KiloMetraje desde"  value="<?= $kilometraje1 ?>">
  </div>

  <div class="form-group">
    <label>KiloMetraje Hasta:</label>
    <input type="num" class="" name="kilometraje2" placeholder="KiloMetraje hasta"  value="<?= $kilometraje2 ?>">
  </div>

  <input class="btn btn-primary" type="submit" value="Ejecutar">
</form>



  <h1><?=$title?></h1>
  <table class="table table-striped table-bordered">
    <tr>
      <th>Id</th>
      <th>Marca</th>
      <th>Modelo</th>
      <th>Kilometraje</th>
      <th class="text-center">
        <a class="btn btn-success" href="/vehiculos/create.php">+</a>
      </th>
    </tr>
<?php

  if ((empty($_POST['marca']) && empty($_POST['modelo'])) && (empty($_POST['kilometraje1']) && empty($_POST['kilometraje2'])) ) {

      $vehiculos = $vehiculo_model->read();
      if ($vehiculos) {
      foreach ($vehiculos as $vehiculo) {
          require './row.php';
      }
    
  }else{

      $vehiculos = $vehiculo_model->filter($marca, $modelo, $kilometraje1, $kilometraje2);
      if ($vehiculos) {
      foreach ($vehiculos as $vehiculo) {
          require './row.php';
      }
  }

}

?>
  </table>
</div>