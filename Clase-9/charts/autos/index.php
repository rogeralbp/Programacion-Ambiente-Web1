<?php
  require_once '../shared/guard.php';
  $title = 'CRUD de Autos';
  require_once '../shared/header.php';
  require_once '../shared/db.php';
  $marca        = filter_input(INPUT_GET, 'marca', FILTER_SANITIZE_STRING);
  $modelo       = filter_input(INPUT_GET, 'modelo', FILTER_SANITIZE_STRING);
  //$autos     = $auto_model->select();
?>
<div class="container">
  <h1><?=$title?></h1>
  <hr>
  
  <div class="row">
    <div class="col-md-6">
      <div class="form-row pb-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="Marca" name="marca" value="<?=$marca ?? ''?>" id="marca">
        </div>
        <div class="col">
          <input type="number" class="form-control" name="modelo" placeholder="Modelo" value="<?=$modelo ?? ''?>" id="modelo" min=1>
        </div>
        <div class="col">
          <button id="btn-salvar" type="button" class="btn btn-primary">Salvar</button>
        </div>
        <div class="col">
          <button id="btn-ver" type="button" class="btn btn-primary">Ver Autos</button>
        </div>
      </div>
    </div>

<div class="row">
    <div class="col-md-6">
      <table id="tabla-ajax" class="table table-hover table-bordered">
        <tr class="table-success">
          <th>ID</th>
          <th>Marca</th>
          <th>Modelo</th> 
        </tr>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/assets/js/autos.js"></script>
