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

        <!-- page contents -->
        <section id="index-carousel">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div id="carousel-example-generic" class="carousel slide img-responsive" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="images/walnut-creek-salon-spa.jpg" alt="Walnut Creek Salon Spa">
                                </div>
                                <div class="item">
                                    <img src="images/changes-salon-lounge-spa.jpg" alt="Changes Salon Lounge Spa">
                                </div>
                                <div class="item">
                                    <img src="images/spa-relaxation.jpg" alt="Spa Relaxation">
                                </div>
                                <div class="item">
                                    <img src="images/changes-salon-garden.jpg" alt="Changes Salon Garden">
                                </div>
                                <div class="item">
                                    <img src="images/salon-treatment-waxing.jpg" alt="Salon Treatment Waxing">
                                </div>
                                <div class="item">
                                    <img src="images/changes-salon-massage.jpg" alt="Changse Salon Massage">
                                </div>
                                <div class="item">
                                    <img src="images/changes-waxing-facial.jpg" alt="Changes Waxing Facial">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="wcpremiere">
            <div class="container">
                <div class="row">
                    <!-- welcome message -->
                    <div class="col-lg-12">
                        <h1 class="font-30 text-center">WALNUT CREEK'S PREMIERE SALON &amp; DAY SPA</h1>
                        <p>Changes Salon and Day Spa is a unique venue to relax, de-stress and get gorgeous.  At Changes, we are dedicated to providing the most innovative beauty and wellness services in a beautiful and relaxing environment. With 18 hair stations, 11 treatment rooms, a semi-private pedicure room with a 16 foot water wall, Aqua Terra relaxation room, men’s and women’s locker rooms with steam lounges and 60 talented team members we will meet all your salon and spa needs.   Centrally located at the corner of Lincoln and N. Broadway in Downtown Walnut Creek, visit us and find out why Changes has been voted The Best of The East Bay over 30 times.</p>
                    </div><!-- /welcome -->
                </div><!-- /row -->
            </div><!-- /container -->
        </section>

        <section id="serviceimg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 image first">
                        <a href="salon-services.html"><h2>Salon<br>Services</h2></a>
                    </div>
                    <div class="col-md-4 image second">
                        <a href="spa-services.html"><h2>Spa<br>Services</h2></a>
                    </div>
                    <div class="col-md-4 image third">
                        <a href="http://saas.shopsite.com/chan13/"><h2>Shop /<br>Gift Cards</h2></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Google Maps | Inside Store -->
        <section class="space-bottom-40">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2>360 View of Changes Salon</h2>
                    </div>
                    <div class="col-xs-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sus!4v1455494383746!6m8!1m7!1sqAceqRwv9EwAAAQvOfp7Wg!2m2!1d37.90057447706362!2d-122.0604884418538!3f144.56623210909416!4f2.171666262307525!5f0.7820865974627469" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen></iframe>
                    </div>
                </div><!-- /row -->
            </div>
        </section>

        <section id="fromourblog">
            <div class="container">
                <div class="row">
                    <div class="firstcol col-md-9">
                        <h2 class="blog-heading">From Our Blog</h2>

                        <!-- start feedwind code -->
                        <script type="text/javascript">document.write('\x3Cscript type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js">\x3C/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "https://changessalon.wordpress.com/feed/",rssmikle_frame_width: "100%",rssmikle_frame_height: "400",frame_height_by_article: "0",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",scrollbar: "on",autoscroll: "on",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "Off",rssmikle_title: "on",rssmikle_title_sentence: "",rssmikle_title_link: "https://changessalon.wordpress.com/",rssmikle_title_bgcolor: "#4D4D4D",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#3B3B3B",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",item_link: "off",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M %p",item_description_style: "text+tn",item_thumbnail: "full",item_thumbnail_selection: "auto",article_num: "15",rssmikle_item_podcast: "off",keyword_inc: "",keyword_exc: ""};feedwind_show_widget_iframe(params);})();</script><div style="font-size:10px; text-align:center; width:300px;"><a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a><!--Please display the above link in your web page according to Terms of Service.--></div>
                        <!-- end feedwind code -->
                    </div>
                    <div class="secondcol col-md-3">
                        <div>
                            <h3>Latest on Instagram</h3>
                            <!-- SnapWidget -->
                            <iframe src="https://snapwidget.com/embed/187200" class="snapwidget-widget snapwidget-iframe" allowTransparency="true" frameborder="0" scrolling="no"></iframe>
                            <button><a href="https://instagram.com/changeswc/">View All Instagram</a></button>
                        </div>
                    </div>
                </div>
            </div>
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
