<?php
  $title = 'Login';
  require_once './shared/header.php';
  require_once './shared/sessions.php';
  $usr = $_POST['usr'] ?? '';
  $pwd = $_POST['pwd'] ?? '';
  if ($usr == 'roger' && $pwd == 'Saborio17') {
    $_SESSION['usuario'] = $usr;
  }

  if (isset($_SESSION['usuario'])) {
      echo "Bienvenido ". $_SESSION['usuario'];
      echo "<a href='./logout.php'>Cerrar Sesión</a>";
      return;
  }
?>
<form method="post">
  <input type="text" name="usr">
  <input type="password" name="pwd">
  <input type="submit">
</form>
