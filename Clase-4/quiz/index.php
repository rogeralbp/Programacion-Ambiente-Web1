<?php 
 require_once './controlador.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Quiz #1</title>
</head>
<body>
<form method="get" action="index.php">

<input type="text" name="texto" placeholder="introduzca su nombre" value="<?= $texto ?>">

<input type="submit" name="">

<h1>Hola <?php echo "$texto"; ?>, su nombre contiene <?php echo contarLetras($texto); ?> letras</h1>

</form>
</body>
</html>