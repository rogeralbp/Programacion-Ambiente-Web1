<?php
  $title = 'Home';
  require_once './shared/header.php';
  $colors = ['rojo.php', 'azul.php', 'verde.php', 'amarillo.php'];
  shuffle($colors);
?>

<div class="flex-container">
  <?php
  foreach ($colors as $color) {
      require_once "./shared/$color";
  }
  ?>
  <a id="random_btn" href="/" class="btn btn-primary">Random</a>
</div>
