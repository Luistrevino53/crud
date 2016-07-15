<form>
	<div class="form-group">
		<label>Periodicos</label>
		<select ng-model="editar.periodico" ng-options="periodico as periodicos.Nombre for x in periodicos track by periodicos.idperiodico">
		</select>
	</div>
</form>