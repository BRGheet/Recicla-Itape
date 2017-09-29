@extends('.site.template.cabecalho')
@section('cabecalho')
<div class="container-fluid UserInterface">
	<div class="col-md-2 col-md-offset-1 userImage">
		<div class="UserPhotoDiv"></div>
	</div>
	<div class="col-md-2 NameInforma">
		<div class="InformationUser">
			<p>{{ Auth::user()->name }}</p>
			<p></p>
			<p>800 / 1000 pontos</p>
		</div>
	</div>
</div>
<div class="container-fluid UserContent">
	<div class="container HistoricBox">
		<div class="col-md-7 Historic">
			<p>Historico de Entregas</p>
			<table class="table">
				<thead>
					<tr>
						<th>Data</th>
						<th>Horario</th>
						<th>Local</th>
						<th>Material</th>
						<th>Pontos</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>08/09/2017</td>
						<td>15:12</td>
						<td>Cooperita</td>
						<td>Plastico</td>
						<td>5</td>
					</tr>
					<tr>
						<td>08/09/2017</td>
						<td>15:12</td>
						<td>Cooperita</td>
						<td>Plastico</td>
						<td>5</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- Css Para background-color User -->
<style type="text/css">
body{
	background-color: #ededed;
}
</style>
@endsection


