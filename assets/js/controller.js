var app = angular.module('appFirstController', []);

app.controller('firstController', ["$scope",function(scope){
	scope.errores = {};
	scope.newComent = {};
	scope.comentarios = [
		{	
			comentario: "Primer Comentario",
			username: "El Creador ALFAYOMEGA"
		},
		{	
			comentario: "Segundo, apunte desfasado",
			username: "El  bajito del fondo"
		},
	];

	scope.addComent = function(){
		if (scope.newComent.comentario){ 
			console.log(scope.newComent.comentario);
			scope.errores.comentario = 'success';
		} else { 
			scope.errores.comentario = 'danger'; 
		}

		if (scope.newComent.username){ 
			scope.errores.username = 'success';
		} else { 
			scope.errores.username = 'danger'; 
		}

		if (scope.newComent.comentario && scope.newComent.username){ 
			scope.comentarios.push(scope.newComent);
			scope.newComent = {};
			scope.errores = {};
		}

		
	};
}]);