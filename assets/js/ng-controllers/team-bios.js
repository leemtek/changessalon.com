(function() {
   'use strict';

   angular.module('changessalonApp', [])
       .controller("CtrlTeamBios", function($scope) {
           $scope.employees = [
                {
                    "name": "Kristin",
                    "title": "Premier Stylist",
                    "categories": "Stylists",
                    "image": "Albums/Stylists/thumbs/Alejandra.jpg",
                    "isDisabled": "true",
                    "description": ""
                }, {
                    "name": "Duane",
                    "title": "Premier Stylist",
                    "categories": "Stylists",
                    "image": "Albums/Stylists/thumbs/Alejandra.jpg",
                    "isDisabled": "true",
                    "description": ""
                }
           ]; // $scope.employees

           $scope.duaneLeem = "Duane was here.";
       }) // .controller

       .directive("employeeBox", function() {
           return {
               templateUrl: "/assets/js/ng-controllers/templates/team-bios.html"
           }; // return
       }) // .directive
   ; // angular.module()
}());
