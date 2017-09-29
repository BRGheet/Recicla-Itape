@extends('.site.template.cabecalho')
@section('cabecalho')
<div class="container-fluid UserInterface">
	<div class="col-md-2 col-md-offset-1 userImage">
		<div class="UserPhotoDiv"></div>
	</div>
	<div class="col-md-2 NameInforma">
		<div class="InformationUser">
			<p>Miquéias Fernando</p>
			<p></p>
			<p>800 / 1000 pontos</p>
		</div>
	</div>
</div>
<div class="container-fluid UserContent">
	<div class="container HistoricBox">
		<div class="col-md-7 Historic">
			
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


