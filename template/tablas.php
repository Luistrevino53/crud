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
	</tr>
	<tr ng-repeat="x in medios">
		<td>{{ x.id }}</td>
		<td>{{ x.medio }}</td>
		<td>{{ x.color }}</td>
		<td>{{ x.premium }}</td>
		<td>{{ x.seccion }}</td>
		<td>{{ x.tamano }}</td>
		<td>{{ x.par }}</td>
		<td>{{ x.costo }}</td>
	</tr>
</table>