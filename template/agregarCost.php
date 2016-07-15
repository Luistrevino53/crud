<!DOCTYPE html>
<html lang="en" ng-app="crudCostos">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Costo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
	<script src="js/main.js"></script>
	<style type="text/css">
		.body-container{
			margin-top: 100px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container">
  			<ul class="nav navbar-nav">
    				<li><a href="#/añadir">Añadir</a></li>
    				<li><a href="#/salir">Salir</a></li>
    			</ul>
    		<form class="navbar-form navbar-right">
    			<div class="form-group">
    				<input type="text" class="form-control" placeholder="Buscar">
    			</div>
    		</form>
 		 </div>
	</nav>
	<div class="body-container">
		<form>
			<div class="form-group">
				<label>Periodico</label>
			</div>
		</form>

	</div>	
</body>
</html>