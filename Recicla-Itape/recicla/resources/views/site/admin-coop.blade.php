@extends('.site.template.admin')

@section('content')

<h1>Nova Cooperativa</h1>
<p class="lead">Adicione uma nova cooperativa no sistema</p>
<div class="col-md-offset-2 col-md-7">
	<div class="panel panel-primary">
		<div class="panel-heading">
      	Painel
    	</div>
    	<div class="panel-body">
		    <label for="autor">Nome da cooperativa</label>
			<input id="autor" type="text" name="autor"  class="form-control">
			<br>
			<label for="end">Endereço</label>
			<input id="end" type="text" name="endereco" class="form-control">
			<br>
			<label for="tel">Telefone</label>
			<input id="tel" type="text" name="endereco" class="form-control">
			<br>
			<h3>Tipo de lixo que recolhe: </h3>
			<label class="checkbox-inline"><input type="checkbox" value="papel">Papel</label>
			<label class="checkbox-inline"><input type="checkbox" value="plastico">Plastico</label>
			<label class="checkbox-inline"><input type="checkbox" value="vidro">Vidro</label>
			<br>
			<br>
			<button class="btn btn-green">Submeter</button>
    	</div>
  	</div>
</div>

@endsection

