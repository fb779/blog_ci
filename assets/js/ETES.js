var app = angular.module('app_etes', []);

app.controller('login', ['$scope', function($scope){
	$scope.formData = {};

	$scope.save = function(){
		if (!$scope.formData.name && !$scope.formData.pass)
			console.log($scope.formData);
	};

	$scope.submitForm = function (formData) {
	    alert('Form submitted with' + JSON.stringify(formData));
	};
}]);


var module = angular.module('app_etes', []);

module.controller('NewUserController', function($scope) {
	$scope.save = function() {
		if ($scope.userForm.$valid) {
			alert('User saved');
			$scope.reset();

		} else {
			alert("Campos sin diligenciar");
			$scope.url = '#';
		}
	};
	
	$scope.reset = function() {
		$scope.user = { name: '', email: '' };
	}
});