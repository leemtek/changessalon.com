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
        <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/assets/includes/main.head.php"); ?>

        <!-- LeemTek -->
        <link href="/assets/css/team-bios.css" rel="stylesheet" />

        <!-- Media Boxes CSS files -->
        <link rel="stylesheet" type="text/css" href="/assets/plugins/css/magnific-popup.css">
        <link rel="stylesheet" type="text/css" href="/assets/plugins/css/mediaBoxes.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Custom Page Styles -->
        <link href="/assets/css/201611-holidays-special.css" rel="stylesheet">
    </head>

    <body>
        <!-- Main Header Configuration -->
        <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/assets/includes/main.body.header.php"); ?>

        <!-- page contents -->
        <div id="holidays-special" class="container">
            <section id="first">
                <div class="row space-bottom-40">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 col-lg-offset-1 text-center">
                        <img src="/assets/img/promos/201602-february.jpg" class="img-responsive center-block" alt="February is the Month of Love" />
                    </div><!-- /col -->

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                        <div class="space-bottom-40"></div>
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="text-center text-bold" style="font-size: 18px;">February is the month of Love</div>
                            </div>
                            <div class="panel-body">
                                <h2 class="text-bold space-bottom-20" style="font-size: 18px;">Gift Card Specials</h2>

                                <ul class="space-bottom-20">
                                    <li>Purchase a Gift card of $160 or more and receive a $20 Service Voucher.</li>
                                    <li>Purchase a Gift Card over $300 and receive a $20 Service Voucher plus a voucher for an Acoustic Body Balancing experience.  A $45 value.</li>
                                    <li>Purchase a Gift Card over $400 and receive two $20 Service Vouchers plus a voucher for an Acoustic Body Balancing experience. A $65 value.</li>
                                </ul>

                                <div class="text-center"><a class="btn btn-danger" href="http://saas.shopsite.com/chan13/" target="_blank">Order Online</a></div>
                            </div>
                        </div>
                    </div><!-- /col -->
                </div><!-- /row -->
            </section>
        </div>

        <!-- Main Footer -->
        <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/assets/includes/main.body.footer.php"); ?>

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
            })(); // function()
        </script>

        <!-- LeemTek JS -->
        <script src="/assets/js/leemtek.js"></script>
    </body>

</html>
