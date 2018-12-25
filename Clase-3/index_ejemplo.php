<?php
  require_once './table_ejemplo.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Table Generator</title>
</head>
<body>
  <form method="get" action="index.php">
    <label>Rows:</label>
    <input type="number" name="rows" required value="<?= $rows ?>">
    <br>
    <label>Columns:</label>
    <input type="number" name="columns" required value="<?= $columns ?>">
    <br>
    <label>Char:</label>
    <textarea name="char" required>
<?=$char?>
    </textarea>
    <input type="submit">
  </form>
<?php
  echo drawTable($rows, $columns, $char);
?>
</body>
</html>
