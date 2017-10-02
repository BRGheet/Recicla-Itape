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
	<div class="row">
		<!-- Recompensas -->
		<div class="col-md-3  rewards">
			<h1>Recompensas</h1>
			<div class="imageRewards col-md-12">
				<div class="ImageBene">
				</div>
				<div class="rewardsText col-md-12">
					<p>Sorvete grátis a partir de 50 pontos.</p> 
					<div class="col-md-12 InfoReward">
						<a href="">mais informações</a>
					</div>
				</div>
			</div>

		</div>
		<!-- Historico de pontos -->
		<div class="col-md-6  historicMain">
			<div class="historic">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Data</th>
							<th>Hora</th>
							<th>Cooperativa</th>
							<th>Material</th>
							<th>Pontos</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>08/02/2017</td>
							<td>13:49</td>
							<td>Cooperita</td>
							<td>Plastico</td>
							<td>5 Pontos</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>09/02/2017</td>
							<td>14:19</td>
							<td>Cooperita</td>
							<td>Metal</td>
							<td>15 Pontos</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>09/02/2017</td>
							<td>11:32</td>
							<td>Cooperita</td>
							<td>Orgânico</td>
							<td>2 Pontos</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
<!-- Css Para background-color User -->
<style type="text/css">
body{
	background-color: #ededed;
}
</style>
@endsection


