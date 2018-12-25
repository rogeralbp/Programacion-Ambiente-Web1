<?php 
  
  require_once './MySqlConnection.php';
  require_once './sessions.php';

  $con = new MySqlConnection('root', '', 'eshop', 3306, '127.0.0.1');
  $con->connect();

  $usr = $_POST['usr'] ?? '';
  $pwd = $_POST['pwd'] ?? '';

  $result = $con->runQuery('SELECT nombre,correo,contrasena FROM usuarios_login WHERE correo = (?)',[$usr]);
  $contraseña='';
  $correo='';
  $nombre='';

  foreach ($result as $row) {
  
      $nombre = $row['nombre'];
      $correo =  $row['correo'];
      $contraseña = $row['contrasena'];
  
    if (($correo == $usr) && ($contraseña == $pwd)){
           $_SESSION['nombre'] = $nombre;
    }

  if (isset($_SESSION['nombre'])) {
      echo "Bienvenido ". $_SESSION['nombre'];
      echo "<a href='./logout.php'><br>Cerrar Sesión</a>";
      return;
  }
}

  $con->disconnect();
?>

<form method="post">
  <h1>LOGIN</h1>
  <input type="text" name="usr">
  <input type="password" name="pwd">
  <input type="submit">
</form>
