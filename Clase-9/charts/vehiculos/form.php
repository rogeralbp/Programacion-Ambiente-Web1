<form method="POST">
  <div class="form-group">
    <label>Marca</label>
    <input type="text" class="form-control" name="marca" placeholder="Marca" required value="<?= $vehiculo['marca'] ?? '' ?>">
  </div>
  <div class="form-group">
    <label>Modelo</label>
    <input type="num" class="form-control" name="modelo" placeholder="Modelo" required value="<?= $vehiculo['modelo'] ?? '' ?>">
  </div>
  <input class="btn btn-primary" type="submit" value="Aceptar">
  <a class="btn btn-danger" href="/vehiculos">Cancelar</a>
</form>
