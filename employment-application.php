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
        <link rel="stylesheet" type="text/css" href="./assets/css/employment-application.css" />
    </head>

    <body>
        <!-- Main Header Configuration -->
        <?php include_once("./assets/includes/main.body.header.php"); ?>

        <!-- page contents -->
        <section id="job-application" ng-controller="ctrlJobApplication">
            <h1 class="space-top-40 text-center">APPLICATION FOR EMPLOYMENT</h1>

            <form role="form" name="formEmploymentApplication" class="space-top-40" novalidate>
                <div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#personalInformation" aria-controls="personal" role="tab" data-toggle="tab">Personal Information</a></li>
                        <li role="presentation"><a href="#workHistory" id="clickWorkHistory" aria-controls="profile" role="work" data-toggle="tab">Work History</a></li>
                        <li role="presentation"><a href="#references" aria-controls="messages" role="references" data-toggle="tab">References</a></li>
                        <li role="presentation"><a href="#availability" aria-controls="settings" role="availability" data-toggle="tab">Availability</a></li>
                        <li role="presentation"><a href="#statement" aria-controls="statement" role="tab" data-toggle="tab">Statement</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content clearfix">
                        <!-- Personal Information -->
                        <article role="tabpanel" class="margin-all-20 tab-pane fade in active" id="personalInformation">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div>
                                            <input type="text" class="form-control"
                                                ng-class="{ 'has-error': formEmploymentApplication.frmName.$error.required && !formEmploymentApplication.frmName.$pristine }"
                                                id="frmName"
                                                placeholder="First & Last Name"
                                                ng-model="contactDetails.name"
                                                required
                                            /><!-- /frmName -->
                                        </div>
                                        <span class="help-block" style="display: none;">Please enter your name.</span>
                                    </div>
                                </div><!-- /col -->
                                <div class="col-md-4">
                                    <div>
                                        <input type="text" class="form-control"
                                            ng-class="{ 'has-error': formEmploymentApplication.frmDate.$error.required && !formEmploymentApplication.frmDate.$pristine }"
                                            id="frmDate"
                                            placeholder="Date"
                                            ng-model="contactDetails.date"
                                            required
                                        /><!-- /frmDate -->
                                    </div>
                                    <span class="help-block" style="display: none;">Date is required.</span>
                                </div><!-- /col -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div>
                                            <input type="text" class="form-control"
                                                ng-class="{ 'has-error': formEmploymentApplication.frmSSN.$error.required && !formEmploymentApplication.frmSSN.$pristine }"
                                                id="frmSSN"
                                                placeholder="Social Security Number"
                                                ng-model="contactDetails.ssn"
                                                required
                                            /><!-- /frmSSN -->
                                        </div>
                                        <span class="help-block" style="display: none;">Social Security Number required.</span>
                                    </div>
                                </div><!-- /col -->
                            </div><!-- /row -->

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div>
                                            <input type="text" class="form-control"
                                                id="frmHomePhone"
                                                placeholder="Home Phone Number"
                                                ng-model="contactDetails.phoneHome"
                                            /><!-- /frmHomePhone -->
                                        </div>
                                    </div>
                                </div><!-- /col -->
                                <div class="col-md-4">
                                    <div>
                                        <input type="text" class="form-control"
                                            id="frmMobilePhone"
                                            placeholder="Mobile Phone Number"
                                            ng-model="contactDetails.phoneMobile"
                                        /><!-- /frmMobilePhone -->
                                    </div>
                                </div><!-- /col -->
                                <div class="col-md-4">
                                    <div>
                                        <input type="text" class="form-control"
                                            ng-class="{ 'has-error': formEmploymentApplication.frmEmail.$error.required && !formEmploymentApplication.frmEmail.$pristine }"
                                            id="frmEmail"
                                            placeholder="Email Address"
                                            ng-model="contactDetails.email"
                                        /><!-- /frmEmail -->
                                    </div>
                                </div><!-- /col -->
                            </div><!-- /row -->

                            <!-- Address -->
                            <div class="panel panel-default space-top-20">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Address</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <div>
                                                    <input type="text" class="form-control"
                                                        ng-class="{ 'has-error': formEmploymentApplication.frmAddress.$error.required && !formEmploymentApplication.frmAddress.$pristine }"
                                                        id="frmAddress"
                                                        placeholder="Address"
                                                        ng-model="contactDetails.address"
                                                        required
                                                    /><!-- /frmAddress -->
                                                </div>
                                                <span class="help-block" style="display: none;">Social Security Number required.</span>
                                            </div>
                                        </div><!-- /col -->
                                    </div><!-- /row -->

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div>
                                                    <input type="text" class="form-control"
                                                        ng-class="{ 'has-error': formEmploymentApplication.frmState.$error.required && !formEmploymentApplication.frmState.$pristine }"
                                                        id="frmState"
                                                        placeholder="State"
                                                        ng-model="contactDetails.state"
                                                        required
                                                    /><!-- /frmState -->
                                                </div>
                                                <span class="help-block" style="display: none;">State is required.</span>
                                            </div>
                                        </div><!-- /col -->
                                        <div class="col-md-4">
                                            <div>
                                                <input type="text" class="form-control"
                                                    ng-class="{ 'has-error': formEmploymentApplication.frmCity.$error.required && !formEmploymentApplication.frmCity.$pristine }"
                                                    id="frmCity"
                                                    placeholder="City"
                                                    ng-model="contactDetails.city"
                                                    required
                                                /><!-- /frmCity -->
                                            </div>
                                            <span class="help-block" style="display: none;">City is required.</span>
                                        </div><!-- /col -->
                                        <div class="col-md-4">
                                            <div>
                                                <input type="text" class="form-control"
                                                    ng-class="{ 'has-error': formEmploymentApplication.frmZip.$error.required && !formEmploymentApplication.frmZip.$pristine }"
                                                    id="frmZip"
                                                    placeholder="Zip"
                                                    ng-model="contactDetails.zip"
                                                    required
                                                /><!-- /frmZip -->
                                            </div>
                                            <span class="help-block" style="display: none;">City is required.</span>
                                        </div><!-- /col -->
                                    </div><!-- /row -->
                                </div>
                            </div>

                            <!-- Questionnaire -->
                            <div class="panel panel-default space-top-20">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Questionnaire</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-inline vertical-align-middle">
                                            <div class="col-md-4">What position are you applying for:</div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control width-100p"
                                                    ng-class="{ 'has-error': formEmploymentApplication.frmPosition.$error.required && !formEmploymentApplication.frmPosition.$pristine }"
                                                    id="frmPosition"
                                                    placeholder="Position Title"
                                                    ng-model="contactDetails.position"
                                                    required
                                                /><!-- /frmPosition -->
                                            </div><!-- /col -->
                                        </div><!-- /form-inline -->
                                    </div><!-- /row -->

                                    <div class="row space-top-10">
                                        <div class="form-inline vertical-align-middle">
                                            <div class="col-md-4">Are you under the age of 18?</div>
                                            <div class="col-md-4">
                                                <input type="radio" name="frmUnder18" ng-model="contactDetails.under18" value="yes" /> Yes
                                                <input type="radio" name="frmUnder18" ng-model="contactDetails.under18" value="no" /> No
                                            </div>
                                        </div><!-- /form-inline -->
                                    </div><!-- /row -->

                                    <div class="row space-top-10">
                                        <div class="form-inline vertical-align-middle">
                                            <div class="col-md-4">Are you authorized to work in the U.S. on an unrestricted basis?</div>
                                            <div class="col-md-4">
                                                <input type="radio" name="frmAuthorizedUS" ng-model="contactDetails.authorizedUS" value="yes" /> Yes
                                                <input type="radio" name="frmAuthorizedUS" ng-model="contactDetails.authorizedUS" value="no" /> No
                                            </div>
                                        </div><!-- /form-inline -->
                                    </div><!-- /row -->

                                    <div class="row space-top-10">
                                        <div class="form-inline vertical-align-middle">
                                            <div class="col-md-4">Are you currently a student?</div>
                                            <div class="col-md-2">
                                                <input type="radio" name="frmCurrentStudent" ng-model="contactDetails.currentStudent" value="yes" /> Yes
                                                <input type="radio" name="frmCurrentStudent" ng-model="contactDetails.currentStudent" value="no" /> No
                                            </div>
                                            <div class="col-md-4">
                                                <span>If yes, where?</span>
                                                <input type="text" class="form-control"
                                                    id="frmStudentWhere"
                                                    placeholder=""
                                                    ng-model="contactDetails.studentWhere"
                                                /><!-- /frmPosition -->
                                            </div>
                                        </div><!-- /form-inline -->
                                    </div><!-- /row -->

                                    <div class="row space-top-10">
                                        <div class="form-inline vertical-align-middle">
                                            <div class="col-md-4">Circle the last grade completed in high school:</div>
                                            <div class="col-md-4">
                                                <input type="radio" name="frmHighSchoolLastGrade" ng-model="contactDetails.highSchoolLastGrade" value="9" /> 9
                                                <input type="radio" name="frmHighSchoolLastGrade" ng-model="contactDetails.highSchoolLastGrade" value="10" /> 10
                                                <input type="radio" name="frmHighSchoolLastGrade" ng-model="contactDetails.highSchoolLastGrade" value="11" /> 11
                                                <input type="radio" name="frmHighSchoolLastGrade" ng-model="contactDetails.highSchoolLastGrade" value="12" /> 12
                                                <input type="radio" name="frmHighSchoolLastGrade" ng-model="contactDetails.highSchoolLastGrade" value="GED" /> GED
                                            </div>
                                        </div><!-- /form-inline -->
                                    </div><!-- /row -->

                                    <div class="row space-top-10">
                                        <div class="form-inline">
                                            <div class="col-md-4">Name and Location of High School:</div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control width-100p"
                                                    ng-class="{ 'has-error': formEmploymentApplication.frmHighSchoolLocation.$error.required && !formEmploymentApplication.frmHighSchoolLocation.$pristine }"
                                                    id="frmHighSchoolLocation"
                                                    placeholder="High School"
                                                    ng-model="contactDetails.highSchoolLocation"
                                                    required
                                                /><!-- /frmPosition -->
                                            </div><!-- /col -->
                                        </div><!-- /form-inline -->
                                    </div><!-- /row -->

                                    <div class="row space-top-10">
                                        <div class="form-inline vertical-align-middle">
                                            <div class="col-md-4">Last year of college, trade, or vocational school completed:</div>
                                            <div class="col-md-2">
                                                <input type="radio" name="frmCollegeLastYearCompleted" ng-model="contactDetails.collegeLastYearCompleted" value="1" /> 1
                                                <input type="radio" name="frmCollegeLastYearCompleted" ng-model="contactDetails.collegeLastYearCompleted" value="2" /> 2
                                                <input type="radio" name="frmCollegeLastYearCompleted" ng-model="contactDetails.collegeLastYearCompleted" value="3" /> 3
                                                <input type="radio" name="frmCollegeLastYearCompleted" ng-model="contactDetails.collegeLastYearCompleted" value="4" /> 4
                                            </div>
                                            <div class="col-md-4">
                                                <span>Graduated?</span>
                                                <input type="text" class="form-control"
                                                    id="frmStudentWhere"
                                                    placeholder=""
                                                    ng-model="contactDetails.collegeGraduate"
                                                /><!-- /frmPosition -->
                                            </div>
                                        </div><!-- /form-inline -->
                                    </div><!-- /row -->

                                    <div class="row space-top-10">
                                        <div class="form-inline">
                                            <div class="col-md-4">Major/Area of Study/Degree/License:</div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control width-100p"
                                                    id="frmAchievementDescription"
                                                    placeholder=""
                                                    ng-model="contactDetails.achievementDescription"
                                                /><!-- /frmPosition -->
                                            </div><!-- /col -->
                                        </div><!-- /form-inline -->
                                    </div><!-- /row -->

                                    <div class="row space-top-10">
                                        <div class="form-inline">
                                            <div class="col-md-4">Why would you like to work at Changes Salon?</div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control width-100p"
                                                    id="frmWhyChanges"
                                                    placeholder=""
                                                    ng-model="contactDetails.whyChanges"
                                                /><!-- /frmPosition -->
                                            </div><!-- /col -->
                                        </div><!-- /form-inline -->
                                    </div><!-- /row -->

                                    <div class="row space-top-10">
                                        <div class="form-inline">
                                            <div class="col-md-3">Date you can start:</div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control width-100p"
                                                    ng-class="{ 'has-error': formEmploymentApplication.frmStartDate.$error.required && !formEmploymentApplication.frmStartDate.$pristine }"
                                                    id="frmStartDate"
                                                    placeholder=""
                                                    ng-model="contactDetails.startDate"
                                                /><!-- /frmPosition -->
                                            </div><!-- /col -->
                                            <div class="col-md-2">Salary Desired:</div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control width-100p"
                                                    ng-class="{ 'has-error': formEmploymentApplication.frmSalaryDesired.$error.required && !formEmploymentApplication.frmSalaryDesired.$pristine }"
                                                    id="frmSalaryDesired"
                                                    placeholder=""
                                                    ng-model="contactDetails.salaryDesired"
                                                /><!-- /frmPosition -->
                                            </div><!-- /col -->
                                        </div><!-- /form-inline -->
                                    </div><!-- /row -->

                                    <div class="row space-top-10">
                                        <div class="form-inline">
                                            <div class="col-md-4">Maximum Hours available per week:</div>
                                            <div class="col-md-4">
                                                <input type="number" class="form-control width-100p"
                                                    ng-class="{ 'has-error': formEmploymentApplication.frmMaximumHours.$error.required && !formEmploymentApplication.frmMaximumHours.$pristine }"
                                                    id="frmMaximumHours"
                                                    placeholder=""
                                                    ng-model="contactDetails.maximumHours"
                                                    required
                                                /><!-- /frmPosition -->
                                            </div><!-- /col -->
                                        </div><!-- /form-inline -->
                                    </div><!-- /row -->

                                    <div class="row space-top-10">
                                        <div class="form-inline vertical-align-middle">
                                            <div class="col-md-5">Are you able to perform the essential functions of the job with or without a reasonable accomodation?</div>
                                            <div class="col-md-2">
                                                <input type="radio" name="frmPerformEssentialFunctions" ng-model="contactDetails.performEssentialFunctions" value="yes" /> Yes
                                                <input type="radio" name="frmPerformEssentialFunctions" ng-model="contactDetails.performEssentialFunctions" value="no" /> No
                                            </div>
                                        </div><!-- /form-inline -->
                                    </div><!-- /row -->

                                    <div class="row space-top-10" ng-hide="contactDetails.performEssentialFunctions == 'yes'">
                                        <div class="form-inline">
                                            <div class="col-md-5">If you answered "No", please describe the function(s) you are unable to perform with or without a reasonable accomodation:</div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control width-100p"
                                                    id="frmHandicappedFunctions"
                                                    placeholder=""
                                                    ng-model="contactDetails.handicappedFunctions"
                                                /><!-- /frmPosition -->
                                            </div><!-- /col -->
                                        </div><!-- /form-inline -->
                                    </div><!-- /row -->

                                    <div class="row space-top-10">
                                        <div class="form-inline vertical-align-middle">
                                            <div class="col-md-4">Have you ever applied here before?</div>
                                            <div class="col-md-2">
                                                <input type="radio" name="frmCurrentStudent" ng-model="contactDetails.appliedBefore" value="yes" /> Yes
                                                <input type="radio" name="frmCurrentStudent" ng-model="contactDetails.appliedBefore" value="no" /> No
                                            </div>
                                        </div><!-- /form-inline -->
                                    </div><!-- /row -->

                                    <!-- Button: Work History -->
                                    <div class="row space-top-40 space-bottom-40">
                                        <div class="form-inline vertical-align-middle">
                                            <div class="col-xs-12 text-center">
                                                <a onclick="document.getElementById('clickWorkHistory').click();" class="btn btn-primary">
                                                    Work History
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div><!-- /form-inline -->
                                    </div><!-- /row -->
                                </div><!-- /panel-body -->
                            </div>
                        </article>

                        <!-- Work History -->
                        <article role="tabpanel" class="tab-pane fade" id="workHistory"></article>

                        <!-- References -->
                        <article role="tabpanel" class="tab-pane fade" id="references">...</article>

                        <!-- Availability -->
                        <article role="tabpanel" class="tab-pane fade" id="availability">...</article>

                        <!-- Statement -->
                        <article role="tabpanel" class="tab-pane fade" id="statement">...</article>
                    </div>
                </div>
            </form>

            <div class="space-top-40"></div>
        </section>

        <!-- Main Footer -->
        <?php include_once("./assets/includes/main.body.footer.php"); ?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- AngularJS -->
        <script src="assets/bower_components/angular/angular.min.js"></script>
        <script src="assets/bower_components/angular-animate/angular-animate.min.js"></script>
        <script>
            (function() {
                angular.module("changessalonApp", [])

                ; // angular.module("changessalonApp")
            })(); // function()
        </script>
        <script src="assets/js/ng-controllers/job-application.js"></script>

        <!-- LeemTek JS -->
        <script src="assets/js/leemtek.js"></script>
        <!-- <script src="assets/js/ng-controllers/team-bios.js"></script> -->
    </body>

</html>
