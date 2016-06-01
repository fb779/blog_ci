var todoList = angular.module('appToDoList', ['LocalStorageModule']);

todoList.controller('controllerToDoList', ['$scope','localStorageService', function($scope,StorageService){
	if (StorageService.get('an_todoList')){
		$scope.todo = StorageService.get('an_todoList');
	} else {
		$scope.todo = [];
	}

	$scope.addActiv = function(){
		console.log($scope.newActiv);
		$scope.todo.push($scope.newActiv);
		$scope.newActiv = {};
		StorageService.set('an_todoList',$scope.todo);
	};


}]);