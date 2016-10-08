/* ======================================================================
    Angular 1.5
====================================================================== */
(function(angular) {
    "use strict";

    angular.module("changessalonApp")
        .factory("facJobApplication", [function() {
            var $facJobApplication = [];

            $facJobApplication.contactDetails = {
                /* ========================================
                    Personal Information
                ======================================== */
                "name"                      : "Duane Leem",
                "date"                      : null,
                "ssn"                       : null,
                "phoneHome"                 : null,
                "phoneMobile"               : null,
                "email"                     : "DuaneLeem@alumni.ggu.edu",

                // Address
                "address"                   : null,
                "state"                     : null,
                "city"                      : null,
                "zip"                       : null,

                // Questionnaire
                "position"                  : null,
                "under18"                   : "no",
                "authorizedUS"              : "yes",
                "currentStudent"            : "no",
                "studentWhere"              : null,
                "highSchoolLastGrade"       : "12",
                "highSchoolLocation"        : null,
                "collegeLastYearCompleted"  : "1",
                "collegeGraduate"           : null,
                "achievementDescription"    : null,
                "whyChanges"                : null,
                "startDate"                 : null,
                "frmSalaryDesired"          : null,
                "maximumHours"              : null,
                "performEssentialFunctions" : "yes",
                "handicappedFunctions"      : null,
                "appliedBefore"             : "no",

            }; // contactDetails

            return $facJobApplication;
        }])

        .controller("ctrlJobApplication", ["$scope", "facJobApplication", function($scope, facJobApplication) {
            $scope.contactDetails = facJobApplication.contactDetails;
        }]) // controller("ctrlJobApplication")
    ; // angular.module("changessalonApp")
    
})(window.angular); // function


/* ======================================================================
    Non Angular Components
====================================================================== */
$('#myTabs a:personalInformation').tab('show');