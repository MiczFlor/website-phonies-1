<?php
if(trim(basename($_SERVER['SCRIPT_FILENAME'])) == "index.php") {
    $script_filename = "";
} else {
    $script_filename = "index.php";
}
?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php print $script_filename; ?>#page-top">Phoniebox</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php print $script_filename; ?>#video">Video</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php print $script_filename; ?>#intro">So geht's</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php print $script_filename; ?>#opensource">Open Source</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php print $script_filename; ?>#projects">Projekte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/MiczFlor/RPi-Jukebox-RFID" target="_blank">GitHub</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
