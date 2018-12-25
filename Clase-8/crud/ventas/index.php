<?php
  require_once '../shared/guard.php';
  $title = 'Reporte de  Ventas';
  require_once '../shared/header.php';
  require_once '../shared/db.php';

?>
<div class="container">
  <h1><?=$title?></h1>
  <hr>

  <form method="POST">
  	
  	<div class="form-group">
    <label>Email:</label>
    <input type="text" class="form-control" name="email" placeholder="email">
  	</div>

  	<div class="form-group">
  	<label>Fecha de:</label>
  	<input type="date" class="form-control" name="fecha1">
	</div>

	<div class="form-group">
  	<label>Fecha Hasta:</label>
  	<input type="date" class="form-control" name="fecha2">
	</div>

  	<button type="submit">Ejecutar</button>
  	<hr>

  </form>

  <table class="table table-striped table-bordered">
    <tr>
      <th>Email</th>
      <th>Monto</th>
    </tr>

    <?php

    $ventas = $venta_model->read();
      
      if ($ventas) {
          foreach ($ventas as $venta) {
              require './columnas.php';
          }
      }

    ?>

  </table>
</div>