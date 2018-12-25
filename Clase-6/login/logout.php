<?php
  require_once './sessions.php';
  session_destroy();
  header("Location: http://localhost/UTN-PHP/Clase-6/login/login.php");
?>
