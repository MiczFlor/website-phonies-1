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
        <a class="navbar-brand js-scroll-trigger" href="<?php print $script_filename; ?>#page-top"><?php print $l['navBrand']; ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php print $script_filename; ?>#video"><?php print $l['navVideo']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php print $script_filename; ?>#intro"><?php print $l['navIntro']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php print $script_filename; ?>#opensource"><?php print $l['navFeatures']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php print $script_filename; ?>#projects"><?php print $l['navProjects']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/MiczFlor/RPi-Jukebox-RFID" target="_blank">GitHub</a>
            </li>
<?php
if($l['languageAbbrev'] == "de") {
?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?l=en"><i class="fa fa-globe"></i> <?php print $l['languageEnAbbrev']; ?></a>
              </li>
<?php
} else {
?>
            <li class="nav-item">
              <a class="nav-link" href="index.php"><i class="fa fa-globe"></i> <?php print $l['languageDeAbbrev']; ?></a>
              </li>
<?php
}
?>

          </ul>
        </div>
      </div>
    </nav>
