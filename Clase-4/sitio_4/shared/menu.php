<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Designme.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php
        $menu = [
          'Home' => './index.php',
          'Contact Us' => './contact_us.php',
          'Jobs' => './jobs.php',
          'About' => './about.php'
        ];
        foreach ($menu as $key => $value) {
            echo "<li class='nav-item'>
                    <a class='nav-link' href='$value'>$key</a>
                  </li>";
        }
      ?>
    </ul>
  </div>
</nav>
