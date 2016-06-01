var app = angular.module('ajax_app', []);

app.factory('ajaxFactory', [function(){
	var servicio = {
		posts:[
			{title:"FB779",body:"ksjdfhksjhfkimb jhgs dj jg hdsg jgsdfa"},
			{title:"NELMARTINES",body:"ksjdfhksjhfkimb jhgs dj jg hdsg jgsdfa"},
			{title:"Juan Magna",body:"ksjdfhksjhfkimb jhgs dj jg hdsg jgsdfa"},
		],
		addPost: function(post){
			console.log(servicio.posts);
			servicio.posts.push(post);
		},
	};
	return servicio;
}])

app.controller('ajaxFirst', ['$scope', '$http','ajaxFactory',  function(scope,http,ajaxFactory){
	scope.posts = ajaxFactory.posts;
	scope.newPost = {};
	scope.addPost = function(){
		http.post("http://jsonplaceholder.typicode.com/posts",{
				title: scope.newPost.title,
				body: scope.newPost.body,
				userId: scope.newPost.id
			})
			.success(function(data,status,headers,config){
				scope.post.push(scope.newPost);
				scope.newPost = {};
			})
			.error(function(data,status,headers,config){
				ajaxFactory.addPost(scope.newPost);
				scope.newPost = {};
			});
	};

	http.get("http://jsonplaceholder.typicode.com/posts")
	.success(function(data){
		scope.posts = data;
	})
	.error(function(err) {
		scope.error = "Consulta de los posts errada, carga de posts localmente";
			scope.posts = [
				{title:"FB779",body:"ksjdfhksjhfkimb jhgs dj jg hdsg jgsdfa"},
				{title:"NELMARTINES",body:"ksjdfhksjhfkimb jhgs dj jg hdsg jgsdfa"},
				{title:"Juan Magna",body:"ksjdfhksjhfkimb jhgs dj jg hdsg jgsdfa"},
			];
	});

}]);


