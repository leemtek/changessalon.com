(function(angular) {
    'use strict';
    angular.module('changessalonApp', ['ngAnimate'])
        // HTML includes. Used for reference.
        .controller('includesController', ['$scope', function($scope) {
            $scope.templates = [{
                name: 'header',
                url: 'assets/includes/header.html'
            }, {
                name: 'footer',
                url: 'assets/includes/footer.html'
            }];
            $scope.template = $scope.templates[0];
        }]);
})(window.angular);
