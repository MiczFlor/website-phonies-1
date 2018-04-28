<!DOCTYPE html>
<html lang="de">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php
include("inc.lang.php"); 
$l = $lang['de'];
include("inc.socialshare.php"); 
?>

    <title><?php print $l['title']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/normalize.css" rel="stylesheet">
    
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/phonie.css" rel="stylesheet">
    
    <link rel="apple-touch-icon" sizes="57x57" href="_assets/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="_assets/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="_assets/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="_assets/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="_assets/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="_assets/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="_assets/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="_assets/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="_assets/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="_assets/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="_assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="_assets/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="_assets/icons/favicon-16x16.png">
    <link rel="manifest" href="_assets/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="_assets/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

  </head>

  <body id="page-top">
  
<?php include("inc.navigation.php"); ?>

    <!-- Header -->
    <header class="masthead" style="background-image: url('img/dj-3168590_1920-small2.jpg');">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Hörspiele, Musik, YouTube, Webradio</div>
          <div class="intro-heading text-uppercase">Die Phoniebox</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#video">So funktioniert's</a>
        </div>
      </div>
    </header>
    
    <section id="video">
    <!--section id="video" style="background: url('img/Canvas-Phonieboxes-1920x1080-pink.jpg') no-repeat center center fixed;"-->
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
          </div>
          <div class="col-lg-8 text-center">
              <h3 class="section-heading">Die Phoniebox im Video erklärt:</h3>
              <h2 class="section-heading text-uppercase">Das Wochenend-Projekt</h2>
              <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/7GI0VdPehQI?rel=0&amp;showinfo=0"></iframe>
              </div>
              <br/>
              <p class="">
                &raquo;Die einfachste Option mit Hardware von der Stange&laquo;, urteilt das Online-Magazin
                <em>iphone-ticker.de</em> und stellt das Ergebnis der Redaktion im Video vor. 
                Hier der Link zum kompletten Artikel: 
                <a href="https://www.iphone-ticker.de/wochenend-projekt-kontaktlose-musikbox-fuer-kinder-123063/" target="_blank">Wochenend-Projekt: Kontaktlose Musikbox für Kinder</a>.
              </p>
          </div>
         </div>
       </div>
     </div>
    </section>

    <!-- Howto -->
    <section id="intro">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Hör- und Bastelspaß</h2>
            <h3 class="section-subheading text-muted">Das freie Audiosystem für die kinderleichte Familie</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/girl-3231703_1920_small.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Kinderleicht</h4>
                    <h4 class="subheading">zu bedienen...</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Einfach die Phonie-Karte über die Box streichen und der Hörspaß beginnt.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/raspberry-pi-950490_1920_small.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>... elternleicht gebaut.</h4>
                    <h4 class="subheading"></h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Ganz ohne Lötkolben, schnell zusammengesteckt. Die Zutaten sind gebraucht für unter €50 zu haben und die Software gibt es <a href="https://github.com/MiczFlor/RPi-Jukebox-RFID" target="_blank">gratis im Netz</a>.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/office-620822_1920_250x250.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Steuerung über</h4>
                    <h4 class="subheading">Handy oder PC</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Die Phoniebox ist über WiFi mit deinem Handy, Tablet oder PC verbunden. So kann man sie auch bedienen und mit Musik bestücken.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/music-on-your-smartphone-1796117_1920_small.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>CDs, Kassetten, MP3,</h4>
                    <h4 class="subheading">YouTube, Webradio und mehr</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Die Phoniebox spielt (fast) alles. Fortgeschrittene Tüftler haben sogar schon <a href="https://github.com/MiczFlor/RPi-Jukebox-RFID/issues/18" target="_blank">Spotify integriert</a>.</p>
                  </div>
                </div>
              </li>
              <!--li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Kinder<br>hören<br>Eltern<br>baseln</h4>
                </div>
              </li-->
            </ul>
          </div>
        </div>
      </div>
    </section>
    

    <!-- Services -->
    <section id="opensource">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">You never build alone</h2>
            <h3 class="section-subheading ">Freie Software, Community und Raspberry Pi</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-comments fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Community</h4>
            <p class="">Viele der Bastler/innen sind hilfsbereit und im Netz zu finden, wie z.B. 
            hier im deutschsprachigen <a href="https://forum-raspberrypi.de/forum/thread/13144-projekt-jukebox4kids-jukebox-fuer-kinder/?postID=314919#post314919" target="_blank">forum-raspberrypi.de</a>.
            </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
            <img src="img/Raspberry_Pi_Logo.svg" style="height: 100%;" alt="">
            </span>
            <h4 class="service-heading">Raspberry Pi</h4>
            <p class="">
              Der mini-PC ist das Herz der Phoniebox und gebraucht inzwischen sehr günstig. 
              Ohne löten lassen sich Kartenleser und Soundkarte verbinden.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-github fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Freie Software</h4>
            <p class="">
                Die Software für die Phoniebox ist <a href="https://github.com/MiczFlor/RPi-Jukebox-RFID" target="_blank">gratis und frei im Netz erhältlich</a>. 
                Dort findest du auch eine ausführliche Anleitung in englischer Sprache.             
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Projects Grid -->
    <section class="bg-light" id="projects">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Projekte</h2>
            <h3 class="text-muted">Jede Phoniebox ist ein Original.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/Tissuebox-400x300.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4><strike>Tissue</strike>Phoniebox</h4>
              <p class="text-muted">Eine kurze Anleitung</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/Feuerwehr-Geliras-20171228-400x300.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Feuerwehr</h4>
              <p class="text-muted">Ganz heiß!</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/Markus-20171218_400x300.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Retrofuturismus</h4>
              <p class="text-muted">Upcycling zur Phoniebox</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"><strike>Tissue</strike> Phoniebox</h2>
                  <p class="item-intro text-muted">Eine kurze Bastelanleitung.</p>


                  <img class="img-fluid d-block mx-auto" src="img/portfolio/Tissuebox-Original-800x600.jpg" alt="">
                  <p>Die Tissuebox von WERKHAUS bildet die Grundlage für die Phoniebox.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/Tissuebox-Speakers-800x600.jpg" alt="">
                  <p>Die USB-Lautsprecher und den Raspberry habe ich günstig auf ebay erstanden.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/Tissuebox-Speakers-Disassembled-800x600.jpg" alt="">
                  <p>Die Lautsprecher auseinanderbauen. Vorsicht: die Drähte sind dünn und können leicht reissen. Den kleinen Verstärker habe ich mit Gewebeband an einen der Lautsprecher geklebt.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/Tissuebox-Speakers-Reassembled-800x600.jpg" alt="">
                  <p>Ein gelochtes Alublech dient als Schutz für die Speaker. Der Kartenleser wurde mit Schrauben fixiert (auch hier: Vorsicht mit den Drähten).</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/Tissuebox-RPi-800x600.jpg" alt="">
                  <p>Der Raspberry wurde luftig direkt mit Schrauben am Boden befestigt. Ein USB-Hub versorgt die Lautsprecher und den Pi mit Strom.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/Tissuebox-800x600.jpg" alt="">
                  <p>Bei der finalen Phoniebox wurde das Alublech über dem Lesegerät durch Plastik ersetzt, da sonst die Karten nicht erkannt wurden.</p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Projekt schließen</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Feuerwehr-Phoniebox</h2>
                  <p class="item-intro text-muted">Ganz heiß!</p>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/DbpXD0Y3a-Q?rel=0&amp;showinfo=0"></iframe>
                  </div>
                  <p>
                  Dieses heiße Gefährt funktioniert mit Powerbank und nutzt die GPIO-Knöpfe für Lautstärke und LED Lichteffekte.
                  Mehr zu diesem Projekt des Users 'Geliras' findest du auf
                  <a href="https://forum-raspberrypi.de/forum/thread/13144-projekt-jukebox4kids-jukebox-fuer-kinder/?postID=315304#post315304" target="_blank">forum-raspberrypi.de</a>.
                  </p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Projekt schließen</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Retrofuturismus</h2>
                  <p class="item-intro text-muted">Upcycling zur Phoniebox</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/Markus-20171218_w800-02.jpg" alt="">
                  <p>
                  Diesem eleganten, tragbaren Nordmende Radio hat Markus neues Leben eingehaucht.
                  </p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/Markus-20171218_w800-01.jpg" alt="">
                  <p>
                  Mit Powerbank, die sich laden läßt (s. Buchse unten links)  
                  und einem eingelöteten Kartenlesegerät
                  gilt: Platz ist in der kleinsten Hütte.
                  </p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Projekt schließen</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php include("inc.footer.php"); ?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
