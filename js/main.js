angular.module('crudCostos',["ngRoute"])
	.controller('crudController', function($scope,$http){
		$scope.medios=[
			{
				id:'0',
				medio:'Prueba',
				color:'Si',
				premium:'Si',
				seccion:'Seguridad',
				tamano:'Plana',
				par:'Par',
				costo:'100000'
			}
		];
	});