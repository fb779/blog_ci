var app = angular.module('cuaderno', []);

app.controller('AlumnosController', ['$scope', function($scope){
	$scope.alumnos = [
		{nombre:'Fabian el guapo forero', edad:'25', telefono:'7654263'},
		{nombre:'Jose  el guapo forero', edad:'31', telefono:'7654263'},
		{nombre:'Dario el guapo forero', edad:'20', telefono:'7654263'},
		{nombre:'Rodrigo el guapo forero', edad:'18', telefono:'7654263'},
	];

	$scope.newAlumno = {};

	$scope.guardar = function(){
		$scope.alumnos.push($scope.newAlumno);
		$scope.newAlumno = {};
	};

	$scope.check = false;

	$scope.addAlumno = function() {
		$scope.check = true;
	};

}]);
