/**
 * Aplicacion angular para manejo de informacion entre controladores por medio de fabricas
 */

var app = angular.module('fabrica', []);

app.factory('myFactory', [function(){
	var servicio = {
		objeto: {mensaje: "Hola desde la fabrica"},
		msjInicial: function(){
			servicio.objeto['mensaje'] = "Hola desde la fabrica";
		},
		msjNuevo: function(msj){
			servicio.objeto.mensaje = msj;
		},
	};
	return servicio;

	// dato = {mensaje: "Hola desde la fabrica"};
	// return dato;

	//return {mensaje: "Hola desde la fabrica"}
}]);

app.controller('ControladorUno', ['$scope', 'myFactory', function($scope, myFactory){
	//$scope.dato = myFactory;
	$scope.nuevo = function(){
		console.log($scope.nuevoMensaje)
		myFactory.msjNuevo($scope.nuevoMensaje);
	};

	$scope.dato = myFactory.objeto;
}]); 

app.controller('ControladorDos', ['$scope', 'myFactory', function($scope, myFactory){
	//$scope.dato = myFactory; 
	$scope.nuevo = function(){
		myFactory.msjNuevo($scope.nuevoMensaje);
	};

	$scope.dato = myFactory.objeto;
}]);

app.controller('ControladorTres', ['$scope', 'myFactory', function($scope, myFactory){
	$scope.reset = function(){
		myFactory.msjInicial();
	};
}]);