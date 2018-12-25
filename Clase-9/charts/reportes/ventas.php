<?php
  require_once '../shared/guard.php';
  $title = 'Reporte de ventas';
  require_once '../shared/header.php';
  require_once '../shared/db.php';
  $email        = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_STRING);
  $fecha_inicio = filter_input(INPUT_GET, 'fecha_inicio', FILTER_SANITIZE_STRING);
  $fecha_fin    = filter_input(INPUT_GET, 'fecha_fin', FILTER_SANITIZE_STRING);
  $reporte = $venta_model->reporteVentas($email, $fecha_inicio, $fecha_fin);
?>

<div class="container">
  <h1><?=$title?></h1>
  <div class="row">
    <form method="GET">
      <div class="col-md-12">
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
            <input type="submit" class="btn btn-primary" value="Buscar">
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-striped table-bordered">
        <tr>
          <th>Vendedor</th>
          <th>Monto</th>
        </tr>
        <?php
        if ($reporte) {
            foreach ($reporte as $fila) {
                require './ventas_row.php';
            }
        } else {
            echo '<tr><td class="text-center" colspan=2>No hay datos</td></tr>';
        }
        ?>
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div id="chart_div"></div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div id="donutchart"></div>
    </div>
  </div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/assets/js/ventas.js"></script>
