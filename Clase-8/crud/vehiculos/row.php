<tr>
  <td><?=$vehiculo['id']?></td>
  <td><?=$vehiculo['marca']?></td>
  <td><?=$vehiculo['modelo']?></td>
  <td>
    <a class="btn btn-warning" href="/vehiculos/update.php?id=<?=$vehiculo['id']?>">Editar</a>
    <a class="btn btn-danger" href="/vehiculos/delete.php?id=<?=$vehiculo['id']?>">Eliminar</a>
  </td>
</tr>
