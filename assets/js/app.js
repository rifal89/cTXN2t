var ukmApp = angular.module("ukmApp", []);

ukmApp.controller('categoryController', function($scope, $http) {
	var url = "<?php echo base_url();?>ajax/get_category";	
   	$http.get(url).success( function(response) {
    	$scope.categories = response;
    });
});

ukmApp.controller('productController', function($scope, $http) {
	var url = "<?php echo base_url();?>ajax/get_product/<?php echo $this->uri->segment(3);?>/<?php echo $this->uri->segment(4);?>";
   	$http.get(url).success( function(response) {
    	$scope.products = response;
    });	
});