
    <!-- Footer -->
    <footer class="bg_cark">
      <div class="container">
        <div class="row">
          <div class="col-md-1">
            <span class="copyright"><?php print $l['footerContact']; ?>:</span>
          </div>
          <div class="col-md-3 text-center">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/miczflor" target="_blank">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/MiczFlor/RPi-Jukebox-RFID" target="_blank">
                  <i class="fa fa-github"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-8">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="impressum.php"><?php print $l['footerImprint']; ?></a>
              </li>
<?php
if($l['footerDataprivacypolicy'] == "de") {
?>
              <li class="list-inline-item">
                <a href="datenschutz.php"><?php print $l['footerDataprivacypolicy']; ?></a>
              </li>
<?php
} else {
?>
              <li class="list-inline-item">
                <a href="dataprivacy.php"><?php print $l['footerDataprivacypolicy']; ?></a>
              </li>
<?php
}
?>
            </ul>
          </div>
        </div>
      </div>
    </footer>
