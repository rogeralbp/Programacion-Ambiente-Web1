<?php

require_once './validador.php';
$nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Quiz</title>
</head>
<body>
  <form method="POST">
    <label>Nombre: <?=Validador::validar('nombre')?></label>
    <input type="text" name="nombre" value="<?=$nombre?>">
    <button>OK</button>
  </form>
  <?php
    echo "<h1>Hola $nombre</h1>";
    echo "Su nombre contiene " . strlen($nombre) . " Letras"
  ?>
</body>
</html>

