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
                <div class="row">
                    <div class="col-xs-12 col-md-7">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="text-center text-bold" style="font-size: 18px;">Holiday Open House</div>
                            </div>
                            <div class="panel-body">
                                <div class="text-italic space-bottom-20 text-red">Join us November 29, 5 to 8 pm, for an evening of celebration, stress-free savings &amp; sweet treats. One Night Only:</div>

                                <ul>
                                    <li>10% off all product purchases of $160 or more.</li>
                                    <li>Pick Your Gift: For any $160 or more Gift Card purchase choose either 10% off or a $20 voucher.</li>
                                    <li>Over $500 in prizes!</li>
                                </ul>
                                <p>All guests at the Open House can enter to win. Plus, increase your chance with extra entries for gift card and product purchases.</p>
                                <p>RSVP to <a href="mailto:rsvp@changessalon.com">rsvp@changessalon.com</a> and receive 200 VIP points when you attend.</p>

                            </div>
                        </div>
                    </div><!-- /col -->
                </div><!-- /row -->

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="text-center text-bold" style="font-size: 18px;">Changes Membership</div>
                            </div>
                            <div class="panel-body">
                                <div class="text-italic space-bottom-20">Give 4 months of relaxation with our new “Flex Membership.”</div>

                                <p>We have created a new spa membership that offers your choice of Massage, Facial, Manicure &amp; Pedicure or Hair Renewal Treatment with Blow Dry each month.</p>
                                <ul>
                                    <li>$80/per month (for 4 months or 12 months)</li>
                                </ul>
                                <p>A limited quantity of 4 month member- ships are available so don’t delay! Restrictions apply to gift card specials and memberships.</p>
                                <p>Please ask for details and for additional membership opportunities.</p>

                            </div>
                        </div>
                    </div><!-- /col -->

                    <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="text-center text-bold" style="font-size: 18px;">Beauty &amp; Relaxation</div>
                                <div class="text-center" style="font-size: small;">for you and yours this Holiday Seasons!</div>
                            </div>
                            <div class="panel-body">
                                <h2 class="text-bold" style="font-size: 18px;">Gift Card Specials</h2>
                                <div class="text-italic">Treat the entire family, your loyal team, or just plan ahead.</div>

                                <ul>
                                    <li>Purchase a Gift card of $160 or more and receive a $20 Spa Voucher.*</li>
                                    <li>Purchase a Gift Card over $300 and receive an additional $20 Service Voucher.*</li>
                                    <li>Purchase any combination totaling $1000 in Gift Cards and receive a FREE $100 Gift Card, plus 2 vouchers. <small>*Limit 2 vouchers per household.</small></li>
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
