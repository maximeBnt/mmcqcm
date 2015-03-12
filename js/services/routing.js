/**
 * Created by maximeb on 12/03/15.
 */

angular.module("sampleApp").config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
            when('/route1', {
                templateUrl: 'views/route1_template.html',
                controller: 'RouteController'
            }).
            when('/route2/:nom', {
                templateUrl: 'views/route2_template.html',
                controller: 'RouteController'
            }).
            otherwise({
                redirectTo: '/route1'
            });
    }]);