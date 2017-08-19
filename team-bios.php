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

        <!-- Team Bios Information -->
        <?php include_once("./assets/includes/team-bios.php"); ?>
    </head>

    <body>
        <!-- Main Header Configuration -->
        <?php include_once("./assets/includes/main.body.header.php"); ?>

        <!-- page contents -->
        <section class="grid-section">
            <h1 style="text-align: center; margin-top: -20px; margin-bottom: 40px;">OUR TEAM</h1>
            <div class="content grid-container">

                <!--  ================== MEDIA BOXES ================== -->

                <div class="filters-container">
                    <!-- <input type="text" id="search" class="media-boxes-search" placeholder="Search By Title"> -->

                    <ul class="media-boxes-filter" id="filter">
                      <li><a class="selected" href="#" data-filter="*">All</a></li>
                      <li><a href="#" data-filter=".Stylists">Stylists</a></li>
                      <li><a href="#" data-filter=".Manicurists">Manicurists</a></li>
                      <li><a href="#" data-filter=".Estheticians">Estheticians</a></li>
                      <li><a href="#" data-filter=".Therapists">Massage Therapists</a></li>
                      <li><a href="#" data-filter=".Support">Support</a></li>
                    </ul>
                </div>

                <div id="grid">
                    <!-- -------------------------- BOX MARKUP -------------------------- -->
                    <?php for($row = 0; $row < count($employees); $row++) { ?>
                        <!-- Media Box -->
                        <div class="media-box <?php echo $employees[$row][2]; ?>">
                            <div class="media-box-image">
                                <div data-width="320" data-height="320" data-thumbnail="<?php echo $employees[$row][3]; ?>"></div>

                                <div class="thumbnail-overlay">
                                    <a href="#" data-toggle="modal" data-target="#modal<?php echo $employees[$row][0]; ?>" class="btn btn-sm btn-default <?php if(!$employees[$row][4]) { echo "disabled"; } ?>">More Details</a>
                                </div>
                            </div>

                            <div class="media-box-content">
                                <div class="media-box-title">
                                    <?php echo $employees[$row][0]; ?><br />
                                    <span style="font-weight: normal; font-size: 12px;"><?php echo $employees[$row][1]; ?></span>
                                </div>
                            </div>
                        </div><!-- /media-box -->

                        <!-- Even boxes out. -->
                        <?php if ($row % 4 == 0) { ?>
                            <div class="clearfix"></div>
                        <?php } // if ?>

                        <!-- Modal - Employee Information -->
                        <?php if ($employees[$row][4]) { ?>
                            <div class="modal fade" id="modal<?php echo $employees[$row][0]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <!-- Header -->
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title text-center" id="myModalLabel"><strong><?php echo $employees[$row][0]; ?> </strong><small><?php echo $employees[$row][1]; ?></small></h4>
                                        </div>

                                        <!-- Body -->
                                        <div class="modal-body">
                                            <p>
                                                <img id="bio-pic" class="pull-left" src="<?php echo $employees[$row][3]; ?>" style="padding: 0px 30px 20px 0px; width: 50%;" />
                                                <?php echo $employees[$row][4]; ?>
                                            </p>
                                        </div>

                                        <!-- Footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <a href="contact-us.html"><button type="button" class="btn btn-primary">Contact Us</button></a>
                                        </div>
                                    </div><!-- /modal-content -->
                                </div><!-- /modal-dialog -->
                            </div><!-- /modal -->
                        <?php } ?><!-- /if (!$employees[$row][4]) -->
                    <?php } // for ?>

                </div><!-- /grid -->

            <!--  ================== END MEDIA BOXES ================== -->
            </div>
        </section>

        <!-- include | footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <!-- main left side -->
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-3">
                                <p>
                                    <strong>Address</strong>
                                </p>
                            </div>
                            <div class="col-md-9">
                                <p>Changes Salon &amp; Day Spa
                                    <a class="text-white" href="https://www.google.com/maps/place/Changes+Salon+%26+Day+Spa,+Inc./@37.9004142,-122.062696,17z/data=!3m1!4b1!4m2!3m1!1s0x808561c004540a81:0x6939f68cdf804d95">
                                        <br /> 1475 North Broadway
                                        <br /> Walnut Creek, CA 94596
                                        <br />
                                        <hr />
                                    </a>
                                </p>
                            </div>
                        </div>

                        <!-- mail -->
                        <div class="row">
                            <div class="col-md-3">
                                <p>
                                    <strong>Mail</strong>
                                </p>
                            </div>
                            <div class="col-md-9">
                                <p><a class="text-white" href="mailto:info@changessalon.com">info@changessalon.com</a>
                                    <br />
                                    <hr />
                                </p>
                            </div>
                        </div>

                        <!-- phone -->
                        <div class="row">
                            <div class="col-md-3">
                                <p>
                                    <strong>Phone</strong>
                                </p>
                            </div>
                            <div class="col-md-9">
                                <p><a class="text-white" href="tel:19259471814">925-947-1814</a></p>
                            </div>
                        </div>
                    </div><!-- /col-md-4 -->
                    <div class="col-md-4">
                        <p>
                            <strong>Hours</strong>
                            <br /> Sunday 9:00 am - 5:30 pm
                            <br /> Monday 9:00 - 3:00 pm
                            <br /> Tuesday - Thursday 9:00 am - 9:30 pm
                            <br /> Friday and Saturday 8:00 am - 6:30 pm
                        </p>
                    </div><!-- /col-md-4 -->
                    <div class="col-md-4">
                        <form name="ccoptin" action="http://ccprod.roving.com/roving/d.jsp" target="_blank" method="post">
                            <div><a class="btn btn-default button-black" href="https://www.demandforced3.com/www/etile_scheduler_popup.jsp?d3cp_exid=changessalon&d3cp_source=My%20Website" target="_blank">Schedule an Appointment</a></div>
                            <div class="space-top-10"><a class="btn btn-default button-black" href="">Join Our Mailing List</a></div>
                            <div class="space-top-10">
                                <input type="email" class="form-control" name="ea" />
                                <input type=hidden name="m" value="1011215259327">
                                <input type=hidden name="p" value="oi">
                            </div>
                            <div class="space-top-10"><input class="btn btn-danger" type="submit" name="Submit" value="Go"></div>
                        </form>
                    </div><!-- /col-md-4 -->
                </div><!-- /row -->
            </div>
        </footer>

        <section id="subfooter">
            <div class="container">
                <div class="row">
                    <address class="col-md-4">
                        <p>&copy; 2015 Changes Salon &amp; Day Spa All Rights Reserved</p>
                    </address>
                    <div class="col-md-4">
                        <a href="http://50.255.49.145/login.asp">
                            <p>Employee Login</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <p>Web Development by <a href="http://www.leemtek.com" target="_blank">LeemTek</a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/node_modules/jquery/dist/jquery.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- AngularJS -->
        <script src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/node_modules/angular/angular.min.js"></script>
        <script src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/node_modules/angular-animate/angular-animate.min.js"></script>

        <!-- Media Boxes JS files -->
        <script src="assets/plugins/js/jquery.isotope.min.js"></script>
        <script src="assets/plugins/js/jquery.imagesLoaded.min.js"></script>
        <script src="assets/plugins/js/jquery.transit.min.js"></script>
        <script src="assets/plugins/js/jquery.easing.js"></script>
        <script src="assets/plugins/js/waypoints.min.js"></script>
        <script src="assets/plugins/js/modernizr.custom.min.js"></script>
        <script src="assets/plugins/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/plugins/js/jquery.mediaBoxes.js"></script>

        <script>

            $('#grid').mediaBoxes({
                filterContainer: '#filter',
                search: '#search',
                overlayEffect: 'reveal-bottom',
                columns: 4,
                boxesToLoadStart: 200,
                boxesToLoad: 200,
                horizontalSpaceBetweenBoxes: 20,
                verticalSpaceBetweenBoxes: 20,
                noMoreEntriesWord: "All Entries Loaded",
            });

        </script>

        <!-- LeemTek JS -->
        <script src="assets/js/leemtek.js"></script>
        <script>
            (function(angular) {
                'use strict';
                angular.module('changessalonApp', ['ngAnimate'])
                    
                ;
            })(window.angular);
        </script>
    </body>

</html>
