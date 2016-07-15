angular.module('crudCostos',["ngRoute"])
	.controller('crudController', function($scope,$http,$location){
		$http.get('server/costos.php')
			.then(function (response){
				$scope.medios=response.data;
			});
			$scope.costoeditar;
			$scope.band=true;
			$scope.view='template/tablas.php';

		$http.get('server/periodicos.php')
			.then(function(r){
				$scope.periodicos=r.data;
			});

			$scope.editar={};
		$scope.editar=function(id){
			$scope.costoeditar=id;
			$scope.view='template/formeditar.php';
		}
		$scope.buscador="";

		$scope.eliminar=function(id){
			alert(id);
			$.post('server/eliminar.php',{id:id},function(r){
				alert(r);
			});
				$scope.view='template/tablas.php';
		}
	})
	/*.config(function ($routeProvider){
		$routeProvider
			.when("/", {
				controller: "crudController",
				templateUrl: "template"
			})
	});*/
	