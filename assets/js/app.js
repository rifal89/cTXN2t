var ukmApp = angular.module("ukmApp", []);

ukmApp.controller('categoryController', function($scope, $http) {
	var url = "http://localhost/ioka/ajax/get_category";	
   	$http.get(url).success( function(response) {
    	$scope.categories = response;
    });
})

function getCategory($scope, $http) {
	var url = "http://localhost/ioka/ajax/get_category";	
   	$http.get(url).success( function(response) {
    	$scope.categories = response;
    });	
}