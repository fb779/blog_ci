var app = angular.module('appFiltros', []);

app.filter('removeHtml', [function(){
	return function(texto){
		return String(texto).replace(/<[^>]+>/gm, '');
	}
}]);

app.controller('controllerFiltros', ['$scope', function($scope){
	$scope.mi_html = "<p> Esta es una cadena de un parrafo sin etiquetas html </p>";
}]);