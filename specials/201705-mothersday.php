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
                    <div class="col-lg-12 text-center">
                        <div class="space-bottom-20"><a href="http://saas.shopsite.com/chan13/index.html" target="_blank"><img src="/assets/img/promos/201705-mothers-day.jpg" class="img-responsive center-block" alt="Mother's Day Promotion'" /></a></div>

                        <div><a class="btn btn-primary btn-lg" href="http://saas.shopsite.com/chan13/index.html" target="_blank">Purchase Gift Card</a></div>
                    </div><!-- /col -->
                </div><!-- /row -->
            </section>
        </div>

        <!-- Main Footer -->
        <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/assets/includes/main.body.footer.php"); ?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/node_modules/jquery/dist/jquery.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- AngularJS -->
        <script src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/node_modules/angular/angular.min.js"></script>
        <script src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/node_modules/angular-animate/angular-animate.min.js"></script>
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
