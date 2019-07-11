angular.module('MtnApp', ['angularUtils.directives.dirPagination'])

.controller('OrdersController', function($scope, $http, $window){
  $scope.orders = [];
  $http.get("Scripts/orders.php")
            .then(function (response) {
                $scope.orders = response.data;
                console.log($scope.orders);
            });
})
