<?php
  require_once './calculadora.php';
  require_once './validator.php'
?>
<!DOCTYPE html>
<html>
<head>
  <title>Calculator</title>
</head>
<body>
  <form method="get" action="index_calculadora.php">
    <label>Numero 1: <?=Validator::validate($value1)?> </label>
    <input type="number" name="value1" required value="<?= $value1 ?>">
    <br>
    <label>Numero 2: <?=Validator::validate($value2)?> </label>
    <input type="number" name="value2" required value="<?= $value2 ?>">
    <br>
    <select name="tipo">
    	<option value="Suma">Suma</option>
    	<option value="Resta">Resta</option>
    	<option value="Division">Division</option>
    	<option value="Multiplicacion">Multiplicacion</option>
    </select>
    <input type="submit" value="Realizar Operacion">
    <br>
    <label>Resultado:</label>
    <textarea name="resultado">
    	<?php 
    	echo operacion($value1,$value2,$tipo); 
    	?>
    </textarea>



  </form>

</body>
</html>
