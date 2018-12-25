<?php
  $title = 'Click';
  require_once './shared/header.php';
  require_once './shared/sessions.php';

  $_SESSION['clicks'] = $_SESSION['clicks'] ?? 0;
  $_SESSION['clicks'] ++;
?>


<h1>Click</h1>

<label>
  Total de clicks: <?= $_SESSION['clicks'] ?>
</label>
<br>
<a class="btn btn-primary" href="/">Click</a>

