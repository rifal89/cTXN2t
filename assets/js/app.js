var ukmApp = angular.module("ukmApp", []);

ukmApp.controller('categoryController', function($scope, $http) {
	var url = "<?php echo base_url();?>ajax/get_category";	
   	$http.get(url).success( function(response) {
    	$scope.categories = response;
    });
});