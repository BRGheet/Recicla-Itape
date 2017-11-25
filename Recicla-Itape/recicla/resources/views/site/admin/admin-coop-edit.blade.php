@extends('site.template.admin')

@section('content')
<h1>Nova Cooperativa</h1>
<p class="lead">Adicione uma nova cooperativa no sistema</p>
<div class="col-md-offset-2 col-md-7">
	<div class="panel panel-primary">
		<div class="panel-heading">
      	Painel
    	</div>
    	<div class="panel-body">
    		@foreach($coops as $coop)
    		<form id="upload" enctype="multipart/form-data">
    			<label for="id">ID</label>
            	<input class="form-control" id="id" type="text" name="id" value="{{ $coop->id }}" readonly>
            	<br>
			    <label for="nome">Nome da cooperativa<span class="font-red">*</span></label>
				<input id="nome" type="text" name="nome"  class="form-control" value="{{ $coop->nome }}">
				<br>
				<label for="end">Endereço<span class="font-red">*</span></label>
				<input id="end" type="text" name="endereco" class="form-control" value="{{ $coop->endereco }}">
				<br>
				<label for="tel">Telefone<span class="font-red">*</span></label>
				<input id="tel" type="text" name="telefone" class="form-control" value="{{ $coop->telefone }}">
				<br>
				<h3>Tipo de lixo que recolhe: <span class="font-red">*</span></h3>
				@if($coop->papel == 1)
					<label class="checkbox-inline"><input type="checkbox" class="check" name="papel" checked>Papel</label>
				@else
					<label class="checkbox-inline"><input type="checkbox" class="check" name="papel">Papel</label>
				@endif

				@if($coop->plastico == 1)
					<label class="checkbox-inline"><input type="checkbox" class="check" name="plastico" checked>Plastico</label>
				@else
					<label class="checkbox-inline"><input type="checkbox" class="check" name="plastico">Plastico</label>
				@endif

				@if($coop->vidro == 1)
					<label class="checkbox-inline"><input type="checkbox" class="check" name="vidro" checked>Vidro</label>
				@else
					<label class="checkbox-inline"><input type="checkbox" class="check" name="vidro">Vidro</label>
				@endif
				<br>
				<br>
				<label for="imagem">Faça o Upload da imagem (Opcional)</label>
				<input id="imagem" type="file" name="imagem">
			</form>
			@endforeach
			<br>
			<button class="btn btn-green" data-type="coop" data-cod="2">Submeter</button>
    	</div>
  	</div>
</div>
@endsection