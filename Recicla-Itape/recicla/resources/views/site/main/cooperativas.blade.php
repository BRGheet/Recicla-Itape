@extends('.site.template.cabecalho')
@section('cabecalho')
	<div class="container ContentCoop">
		<div class="row">
			<div class="col-md-12">
				@forelse($coops as $coop)
					<h1>{{ $coop->nome }}</h1>
					<p class="lead">Endereço: {{ $coop->endereco }}</p>
					<button class="btn btn-green" type="button" data-toggle="collapse" data-target="#collapse{{ $coop->id }}">Mais Detalhes</button>
					<br>
					<br>
					<div class="collapse" id="collapse{{ $coop->id }}">
					  <div class="panel panel-default">
					  	<div class="panel-body">
					  		<div class="row">
					  			<div class="col-md-4">
					  				<h3>Endereço</h3>
					  				<p>{{ $coop->endereco }}</p>
					  			</div>
					  			<div class="col-md-4">
					  				<h3>Telefone</h3>
					  				<p>(15){{ $coop->telefone }}</p>
					  			</div>
					  			<div class="col-md-4">
					  				<h3>Tipo de lixo que recolhe</h3>
					  				@if($coop->papel)
          								<span class="glyphicon glyphicon-file green"></span><strong>Papel</strong><br>
          							@endif
          							@if($coop->plastico)
          								<span class="glyphicon glyphicon-cd green"></span><strong>Plastico</strong><br>
          							@endif
          							@if($coop->vidro)
          								<span class="glyphicon glyphicon-glass green"></span><strong>Vidro</strong>
          							@endif
					  			</div>
					  		</div>
					  	</div>
					  </div>
					</div>
					@empty
					<div id="CoopError">
						<h1>Desculpa Nenhuma Cooperativa Encontrada!</h1>
					</div>
				@endforelse
			</div>
		</div>
	</div>
	@include('site.includes.rodape')
@endsection