<?php
  require_once './shared/sessions.php';
  session_destroy();
  header("Location: http://localhost/UTN-PHP/Clase-5/sessions/login.php");
?>
