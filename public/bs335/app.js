var app = angular.module('scoutapp', []);
app.controller('ScoutController', ['$scope', 'ContactService', function ($scope, ContactService) {
        $scope.kw = 'A';
        $scope.loading=false;
        $scope.response = {};
        $scope.init = function () {
            $scope.loading=true;
            ContactService.Search($scope.kw).then(function (d) {
                $scope.loading=false;
                $scope.response = d;
            });
        };
        $scope.$watch('kw', function (newValue, oldValue, scope) {
            console.log(newValue);
            $scope.loading=true;
            ContactService.Search($scope.kw).then(function (d) {
                $scope.response = d;
                $scope.loading=false;
            });
        });
        $scope.init();


    }]);
//====================================================================
app.factory('ContactService', ['$http', function ($http) {
        var service = {};
        service.Search = function (kw) {
            // $http returns a promise, which has a then function, which also returns a promise
            var promise = $http.get('http://localhost/lara/Scout/ScoutDemo/public/index.php/contacts?kw=' + kw).then(function (response) {
                console.log(response);
                return response.data;
            });
            // Return the promise to the controller
            return promise;
        };
        return service;
    }]);