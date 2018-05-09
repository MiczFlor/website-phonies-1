<!DOCTYPE html>
<html lang="de">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php
include("inc.lang.php");
if($_GET['l'] == "en") { 
    $l = $lang['en'];
} else {
    $l = $lang['de'];
}
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
          <div class="intro-lead-in"><?php print $l['headerLeadIn']; ?></div>
          <div class="intro-heading text-uppercase"><?php print $l['headerTitle']; ?></div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#video"><?php print $l['headerStart']; ?></a>
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
              <h3 class="section-heading"><?php print $l['videoLeadIn']; ?></h3>
              <h2 class="section-heading text-uppercase"><?php print $l['videoTitle']; ?></h2>
              <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/7GI0VdPehQI?rel=0&amp;showinfo=0"></iframe>
              </div>
              <br/>
              <p class=""><?php print $l['videoDescription']; ?></p>
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
            <h2 class="section-heading text-uppercase"><?php print $l['introTitle']; ?></h2>
            <h3 class="section-subheading text-muted"><?php print $l['introSubtitle']; ?></h3>
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
                    <h4><?php print $l['timeline01title']; ?></h4>
                    <h4 class="subheading"><?php print $l['timeline01subtitle']; ?></h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"><?php print $l['timeline01description']; ?></p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/raspberry-pi-950490_1920_small.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4><?php print $l['timeline02title']; ?></h4>
                    <h4 class="subheading"><?php print $l['timeline02subtitle']; ?></h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"><?php print $l['timeline02description']; ?></p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/office-620822_1920_250x250.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4><?php print $l['timeline03title']; ?></h4>
                    <h4 class="subheading"><?php print $l['timeline03subtitle']; ?></h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"><?php print $l['timeline03description']; ?></p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/music-on-your-smartphone-1796117_1920_small.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4><?php print $l['timeline04title']; ?></h4>
                    <h4 class="subheading"><?php print $l['timeline04subtitle']; ?></h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"><?php print $l['timeline04description']; ?></p>
                  </div>
                </div>
              </li>
            </ul>
            <img src="img/cassette-3115946_1920-small.jpg" style="max-width: 100%;" class="" alt="digitise old tapes">
          </div>
        </div>
      </div>
    </section>
    

    <!-- Services -->
    <section id="opensource">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><?php print $l['featuresTitle']; ?></h2>
            <h3 class="section-subheading "><?php print $l['featuresSubtitle']; ?></h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-comments fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><?php print $l['feature01Title']; ?></h4>
            <p class=""><?php print $l['feature01Description']; ?></p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
            <img src="img/Raspberry_Pi_Logo.svg" style="height: 100%;" alt="">
            </span>
            <h4 class="service-heading"><?php print $l['feature02Title']; ?></h4>
            <p class=""><?php print $l['feature02Description']; ?></p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-github fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><?php print $l['feature03Title']; ?></h4>
            <p class=""><?php print $l['feature03Description']; ?></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Projects Grid -->
    <section class="bg-light" id="projects">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><?php print $l['projectsTitle']; ?></h2>
            <h3 class="text-muted"><?php print $l['projectsSubtitle']; ?></h3>
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
              <img class="img-fluid" src="<?php print $l['project01ImgIntro']; ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4><?php print $l['project01Title']; ?></h4>
              <p class="text-muted"><?php print $l['project01Subtitle']; ?></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php print $l['project02ImgIntro']; ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4><?php print $l['project02Title']; ?></h4>
              <p class="text-muted"><?php print $l['project02Subtitle']; ?></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php print $l['project03ImgIntro']; ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4><?php print $l['project03Title']; ?></h4>
              <p class="text-muted"><?php print $l['project03Subtitle']; ?></p>
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
                  <h2 class="text-uppercase"><?php print $l['project01Title']; ?></h2>
                  <p class="item-intro text-muted"><?php print $l['project01Subtitle']; ?></p>
                  <?php print $l['project01ModalText']; ?>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    <?php print $l['projectsModalClose']; ?></button>
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
                  <h2 class="text-uppercase"><?php print $l['project02Title']; ?></h2>
                  <p class="item-intro text-muted"><?php print $l['project02Subtitle']; ?></p>
                  <?php print $l['project02ModalText']; ?>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    <?php print $l['projectsModalClose']; ?></button>
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
                  <h2 class="text-uppercase"><?php print $l['project03Title']; ?></h2>
                  <p class="item-intro text-muted"><?php print $l['project03Subtitle']; ?></p>
                  <?php print $l['project03ModalText']; ?>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    <?php print $l['projectsModalClose']; ?></button>
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
