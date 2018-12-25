<?php
  require_once '../shared/guard.php';
  $title = 'Reporte de ventas';
  require_once '../shared/header.php';
  require_once '../shared/db.php';
  $email        = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_STRING);
  $fecha_inicio = filter_input(INPUT_GET, 'fecha_inicio', FILTER_SANITIZE_STRING);
  $fecha_fin    = filter_input(INPUT_GET, 'fecha_fin', FILTER_SANITIZE_STRING);
  $usuarios     = $usuario_model->select();
?>

<div class="container">
  <h1><?=$title?></h1>
  <div class="row">
    <div class="col-md-6">
      <div class="form-row pb-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="Email" name="email" value="<?=$email ?? ''?>" id="email">
        </div>
        <div class="col">
          <input type="date" class="form-control" name="fecha_inicio" placeholder="Marca" value="<?=$fecha_inicio ?? ''?>" id="fecha_inicio">
        </div>
        <div class="col">
          <input type="date" class="form-control" name="fecha_fin" placeholder="Modelo" value="<?=$fecha_fin ?? ''?>" id="fecha_fin">
        </div>
        <div class="col">
          <button id="btn-buscar" type="button" class="btn btn-primary">Buscar</button>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-row pb-2">
        <div class="col">
          <select id="usuario_id">
          <?php
          foreach ($usuarios as $usuario) {
            echo "<option value='{$usuario['id']}'>{$usuario['email']}</option>";
          }
          ?>
          </select>
        </div>
        <div class="col">
          <input type="num" class="form-control" name="monto" placeholder="Monto" id="monto">
        </div>
        <div class="col">
          <button id="btn-salvar" type="button" class="btn btn-primary">Salvar</button>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <table id="tabla-ajax" class="table table-striped table-bordered">
        <tr>
          <th>Vendedor</th>
          <th>Monto</th>
        </tr>
      </table>
    </div>
    <div class="col-md-6">
      <div id="piechart"></div>
    </div>
  </div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/assets/js/ventas.js"></script>
