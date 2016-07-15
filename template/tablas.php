<table class="table table-striped">
	<tr>
		<td>ID</td>
		<td>Medio</td>
		<td>Color</td>
		<td>Premium</td>
		<td>Seccion</td>
		<td>tamaño</td>
		<td>Par/Impar</td>
		<td>Costo</td>
		<td>Acciones</td>
	</tr>
	<tr ng-repeat="x in medios|filter: buscador">
		<td>{{ x.id }}</td>
		<td>{{ x.Nombre }}</td>
		<td>{{ x.tipo }}</td>
		<td>{{ x.premium }}</td>
		<td>{{ x.seccion }}</td>
		<td>{{ x.medidas }}</td>
		<td>{{ x.pagina }}</td>
		<td>{{ x.costo }}</td>
		<td>
			<form>
				<button class="btn btn-success" ng-click="editar(x)"><span class="glyphicon glyphicon-pencil"></span></button>
				<button class="btn btn-danger" ng-click="eliminar(x.id)"><span class="glyphicon glyphicon-remove"></span></button>
			</form>
		</td>
	</tr>
</table>