<?php 
    // Set timezone if server didn't set one.
    // if( ! ini_get('date.timezone') ) date_default_timezone_set('America/Los_Angeles');
?>

<!DOCTYPE html>
<html lang="en" ng-app="changessalonApp">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Walnut Creek's Premier Salon and Day Spa">
        <meta name="keywords" content="spa, hair salon, walnut creek">
        <meta name="author" content="Changes Salon, LeemTek">

        <title>Changes Salon &amp; Day Spa</title>

        <!-- Configuration: <head> -->
        <?php include_once("./assets/includes/main.head.php"); ?>

        <!-- LeemTek -->
        <link href="assets/css/team-bios.css" rel="stylesheet" />

        <!-- Media Boxes CSS files -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/css/magnific-popup.css">
        <link rel="stylesheet" type="text/css" href="assets/plugins/css/mediaBoxes.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- Main Header Configuration -->
        <?php include_once("./assets/includes/main.body.header.php"); ?>

        <section class="container">
            <div class="row">
                <div class="col-lg-2">
                    <p><a href="acoustic-body-balancing.php">Acoustic Body Balancing</a></p>
                    <p><a href="spa-services.html">All Spa Services</a></p>
                </div><!-- /col -->
                <article class="col-lg-10 space-bottom-40">
                    <img src="/images/massage.jpg" class="img-responsive" />

                    <header><h2>Acoustic Body Balancing <span class="label label-default">New</span></h2></header>
                    <p class="space-top-20">Acoustic Body Balancing relaxes your body, quiets your mind and inspires your soul as you feel the music you simultaneously hear resonating through you like a musical massage. Acoustic Body Balancing promotes deep relaxation and stress relief by utilizing the natural healing frequencies of music.</p>
                    <p>The music used in the treatment is recorded using specific frequencies that have been found to support specific bio-energetic goals and healing properties; thus providing a comprehensive stress management and sensory rich integration environment like nothing you have ever experienced before. The Acoustic Body Balancing treatment can be added to any service to enhance your spa experience or enjoyed on its own.</p>
                    <ul>
                        <li>15 minutes $25</li>
                        <li>30 minutes $40</li>
                        <li>60 minutes $55</li>
                    </ul>
                    <p class="space-top-20"><a href="https://www.demandforced3.com/www/etile_scheduler_popup.jsp?d3cp_exid=changessalon&d3cp_source=My%20Website" target="_blank" class="btn btn-primary">Request Appointment</a></p>
                </article><!-- /col -->
            </div><!-- /row -->
        </section>

        <!-- Main Footer -->
        <?php include_once("./assets/includes/main.body.footer.php"); ?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="/assets/bower_components/jQuery/dist/jquery.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- AngularJS -->
        <script src="/assets/bower_components/angular/angular.min.js"></script>
        <script src="/assets/bower_components/angular-animate/angular-animate.min.js"></script>
        <script>
            (function() {
                angular.module("changessalonApp", [])

                ; // angular.module("changessalonApp")

                // Run on startup.
                $(window).load(function(){
                    // $('#promoModal').modal('show');
                });
            })(); // function()
        </script>

        <!-- LeemTek JS -->
        <script src="/assets/js/leemtek.js"></script>
        <!-- <script src="/assets/js/ng-controllers/team-bios.js"></script> -->
    </body>

</html>
